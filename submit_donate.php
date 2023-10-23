<?php
require("conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = ($_POST['donation_option'] === 'custom') ? $_POST['custom_amount'] : $_POST['donation_option'];

    if (!empty($name) && !empty($email) && !empty($amount)) {
        $query = mysqli_query($conn, "INSERT INTO donations (name, email, amount) VALUES ('$name', '$email', '$amount')");

        if ($query) {
            echo "
            <script>
            alert('Donation successfully submitted.');
            document.location.href = 'donate.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Sorry, something went wrong. Please try again.');
            document.location.href = 'donate.php';
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('All fields must be filled');
        document.location.href = 'donate.php';
        </script>
        ";
    }
}
?>
