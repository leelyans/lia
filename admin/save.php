<?php
// Include your database connection file (e.g., conn.php)
include 'conn.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $topic = $_POST['topic'];

    // Check if a file was uploaded
    if (isset($_FILES['abstractFile']) && $_FILES['abstractFile']['error'] == 0) {
        // Define the target directory for file uploads
        $targetDir = 'uploads/';
        // Generate a unique file name for the uploaded file
        $uniqueFileName = uniqid() . '_' . $_FILES['abstractFile']['name'];
        // Define the file path
        $filePath = '../' . $targetDir . $uniqueFileName; // Prepend '../' to the file path

        if(isset($_POST['topic'])) {
            $topic = $_POST['topic'];
        } else {
            // Handle the case where 'topic' is not set, e.g., show an error message or set a default value.
            $topic = 'No Topic Selected';
        }

        // Check if the file was moved to the target directory
        if (move_uploaded_file($_FILES['abstractFile']['tmp_name'], $filePath)) {
            // Database insert query
            $sql = "INSERT INTO abstracts (first_name, last_name, email, phone, topic, abstract_file) VALUES (?, ?, ?, ?, ?, ?)";
            
            // Prepare the statement
            $stmt = $conn->prepare($sql);
            
            // Bind the parameters
            $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $topic, $filePath);
            
            // Execute the statement
            if ($stmt->execute()) {
                // Insertion successful
                header('Location: index.php');
            } else {
                // Insertion failed
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "No file uploaded.";
    }

    // Close the database connection
    $conn->close();
}
?>
