<?php
session_start();

// Define valid username and password
$valid_username = "admin";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, redirect to admin dashboard or any other page
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error
        echo '<script>alert("Invalid username or Password")</script>';
       // header("Location: index.php?error=1");
         
        exit();
    }
}
?>