<?php 
$conn = mysqli_connect("localhost", "root", "", "contact_form");
if ($conn) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$purpose = $_POST['purpose'];
	if ($name && $email && $purpose) {
		if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM volunteers WHERE email = '$email'")) > 0){
			header("Location: volunteer.php? error=Email Already Exists");
		}else{
			$query = mysqli_query($conn, "INSERT INTO volunteers(name, email, purpose) VALUES ('$name', '$email', '$purpose')");
			if ($query == true) {
				header("Location: volunteer.php? message= You have successfully become a volunteer");
			}else{
				header("Location: volunteer.php? error= Sorry...! Try again");
			}
		}
	}
} else{
	die("Failed t connect to the database");
}
?>