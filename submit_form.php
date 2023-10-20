<?php
// Replace with your actual database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "contact_form";

// Create a new database connection
$conn = new mysqli($host, $username, $password, $database);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data and sanitize
$name = $conn->real_escape_string($_POST["name"]);
$email = $conn->real_escape_string($_POST["email"]);
$subject = $conn->real_escape_string($_POST["subject"]);
$message = $conn->real_escape_string($_POST["message"]);

// Use prepared statements to insert data
$sql = "INSERT INTO contact_entries (name, email, subject, message) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Data submitted successfully.";
    } else {
        echo "Error executing the query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error preparing the statement: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
