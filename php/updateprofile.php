<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->
<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['login_success']) || $_SESSION['login_success'] !== true) {
    header("Location: ../index.php");
    exit();
}

$path_to_index = "../html/profile.php?success=profile_update_successfull";


// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Retrieve form data
    $user_id = $_SESSION['user_id'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $dateOfBirth = $_POST['date_of_birth'];
   

    // Update user information in the database
    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', gender='$gender', address='$address', province='$province', date_of_birth='$dateOfBirth' WHERE id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        // Update successful, redirect user to profile page
        header("Location: $path_to_index");
        exit();
    } else {
        // Error updating user information
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect user back to profile page if accessed without form submission
    header("Location: user_profile.php");
    exit();
}
?>
