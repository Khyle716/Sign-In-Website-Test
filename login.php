<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to check if the user exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful";
} else {
    // Login failed
    echo "Invalid email or password";
}

$conn->close();
?>