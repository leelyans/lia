<?php
	include 'conn.php';


    session_start();
    if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
    }

    $volunteers_no = 0;
    $totalamount = 0;

    // Retrieve the number of volunteers
    $volunteers_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM volunteers");
    if ($volunteers_query) {
        $volunteers_data = mysqli_fetch_assoc($volunteers_query);
        $volunteers_no = $volunteers_data['count'];
    }

    // Retrieve the total donation amount
    $amount_query = mysqli_query($conn, "SELECT SUM(amount) AS total_amount FROM donations");
    if ($amount_query) {
        $amount_data = mysqli_fetch_assoc($amount_query);
        $totalamount = $amount_data['total_amount'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registered Members</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #fff;
            text-decoration: none;
        }
        header h1 {
            font-size: 24px;
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li:last-child {
            margin-right: 0;
        }
        nav ul li a {
            font-size: 18px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            margin-left: 1rem;
        }
        .logo:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo"><p style="color: #FF69B4;">LOVE </p> &nbsp <p style="color: white;">IN ACTION</p></a>
        <nav>
            <ul>
                <li><a href="" class="active_page">All Members</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li style="margin-right: 30px;"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>



    		<main >
			
		</div>
	</div>
	<div style="width: 90%; margin-left:80px;">
	<table class="table table-striped" style="margin-top:150px; margin-left: 00px;">
		<thead>
			<tr>
				<th class="active_page">ID</th>
				<th class="active_page">Full Name</th>
				<th class="active_page">Email</th>
				<th class="active_page">Purpose</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = mysqli_query($conn, "SELECT * FROM volunteers;");
			$id = 1;
			while ($row = mysqli_fetch_assoc($sql)) {
			$name = $row['name'];
			$email = $row['email'];
			$purpose = $row['purpose'];
			?>
			<tr>
				<td><?=$id?></td>
				<td><?=$name?></td>
				<td><?=$email?></td>
				<td><?=$purpose?></td>
			</tr>
			
			
			<?php 
            $id++;
            } 
            ?>
		</tbody>
	</table>
	</div>
	
</main>
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</html>
