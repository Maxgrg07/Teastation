<!-- Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825)  -->
<?php
session_start(); // Start session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: ../index.php");
exit();
?>
