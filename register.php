<?php
// Database connection
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'ladiescanstem'; 

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (fullname, email, username,passwor) VALUES ('$fullname', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
