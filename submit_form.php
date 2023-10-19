<?php
// Establish a database connection (adjust credentials as needed)
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "contact_form";
$conn = new mysqli('localhost', 'root', '' , 'contact_form');

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Insert data into the database
$sql = "INSERT INTO contact_entries (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
