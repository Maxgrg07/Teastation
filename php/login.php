<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->
<?php
session_start(); // Start session

$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "tea_station";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];

    // Query the database to fetch user information based on the provided email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if a user record was found
        if (mysqli_num_rows($result) == 1) {
            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Password is correct, set login success flag or session variable
                $_SESSION['user_id'] = $user['id']; // Example: Store user ID in session
                $_SESSION['login_success'] = true; // Example: Set login success flag

                // Redirect to the appropriate page
                header("Location: ../html/home.php?success=login_successful");
                exit();
            } else {
                // Password is incorrect, redirect with error notification
                header("Location: ../index.php?error=invalid_credentials");
                exit();
            }
        } else {
            // No user found with the provided email, redirect with error notification
            header("Location: ../index.php?error=user_not_found");
            exit();
        }
    } else {
        // Error occurred during database query, handle accordingly
        die("Database query error: " . mysqli_error($conn));
    }
}
?>
