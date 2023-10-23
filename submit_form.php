<?php

include("conn.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = ($_POST["subject"]) ? $_POST["message"] : "No subject";
    $message = $_POST["message"];

    // Use prepared statements to insert data
    $sql = mysqli_query($conn, "INSERT INTO messages (sender, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");

    if ($sql) {
        echo "
        <script>
        alert('Data submitted successfully.')
        document.location.href = 'contact.php'
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Something went wrong, Please try again...')
        document.location.href = 'contact.php'
        </script>
        ";
    }
}

?>
