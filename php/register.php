<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->
<?php
session_start(); // Start session

$servername = "localhost";
$username = "web";
$password = "web";
$dbname = "tea_station";

// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname);

$path_to_index = "../index.php";


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // include_once "db_connection.php";


  
    // Function to validate email
    function validateEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    // Validate other fields as needed (e.g., phone number)
    
    // Sanitize and validate form data
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $password = $_POST["password"];
  
    if (!validateEmail($email)) {
      // Handle invalid email
      header("Location: ../html/register.php?error=invalid_email");
      exit;
    }
  
    // Check if the email already exists in the database
    $check_query = "SELECT COUNT(*) AS count FROM users WHERE email = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "s", $email);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_bind_result($check_stmt, $count);
    mysqli_stmt_fetch($check_stmt);
    mysqli_stmt_close($check_stmt);
  
    if ($count > 0) {
      // Email already exists, handle the error
      header("Location: ../html/register.php?error=email_exists");
      exit;
    }
  
    // Hash the password using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  
    // Prepare the SQL query using a prepared statement
    $sql = "INSERT INTO users (firstname, lastname, phone, gender, email, address, province, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $phone, $gender, $email, $address, $province, $hashed_password);
  
    // Execute the statement and check for errors
    if (mysqli_stmt_execute($stmt)) {
      // Data added successfully
      header("Location: ../index.php?success=registration_successful");
      exit;
    } else {
      // Log error instead of exposing it to users
      error_log("Error: " . mysqli_error($conn));
      header("Location: ../html/register.php?error=registration_failed");
      exit;
    }
  
    // Close the statement
    mysqli_stmt_close($stmt);
  }
?>
