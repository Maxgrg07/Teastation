<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->

<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page if not logged in
    header("Location: login.php");
    exit(); // Stop execution of further code
}

// Establish a database connection (replace with your database credentials)
$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "tea_station";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user information from the database using the user ID stored in the session
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, fetch user data
    $row = $result->fetch_assoc();
    $firstname = $row["firstName"];
    $lastname = $row["lastName"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $province = $row["province"];
    // $dob = $row["dob"];
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
