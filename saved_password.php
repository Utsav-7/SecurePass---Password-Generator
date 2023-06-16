<?php
// Assuming you have a MySQL database setup with appropriate credentials
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "password_generator";

// Create a connections
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO passwords (username, password, strength) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $strength);

// Get the form data
$username = $_POST['username']; // Assuming you have an input field for username
$password = $_POST['generated-password'];
$strength = $_POST['password_strength'];

// Execute the statement
$stmt->execute();

// Close the statement and the connection
$stmt->close();
$conn->close();

// Redirect to a success page or do further processing
header("Location: success.html");
exit();
?>
