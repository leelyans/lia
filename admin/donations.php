<?php
    include 'conn.php'; // Include the database connection script

    session_start();

    if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
    }

    $volunteers_no = 0;
    $totalamount = 0;

    // Retrieve the number of volunteers
    $donors_query = mysqli_query($conn, "SELECT COUNT(*) AS count FROM donations");
    if ($donors_query) {
        $donors_data = mysqli_fetch_assoc($donors_query);
        $donors_no = $donors_data['count'];
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
    <title>All Donations</title>
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
        .additional{
            display: flex; 
            flex-direction: row; 
            width: 100%; 
            justify-content: space-between; 
            margin: 2rem 0 0 0; 
            padding: 0 1rem 0 1rem;
        }
        .additional div{
            font-size: 18px;
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
                <li><a href="index.php">All Members</a></li>
                <li><a href="" class="active_page">Donations</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li style="margin-right: 30px;"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div style="width: 90%; margin-left:80px;">
            <table class="table table-striped" style="margin-top:150px; margin-left: 00px;">
                <thead>
                    <tr>
                        <th class="active_page">ID</th>
                        <th class="active_page">Donor</th>
                        <th class="active_page">Email</th>
                        <th class="active_page">Amount</th>
                    </tr>
                </thead>
                <tbody style="margin-top:500px;">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM donations;");
                    $id = 1; // Initialize $id here

                    while ($row = mysqli_fetch_assoc($sql)) {
                        $donor = $row['name'];
                        $email = $row['email'];
                        $amount = $row['amount'];

                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $donor ?></td>
                            <td><?= $email ?></td>
                            <td><b><?= $amount ?> $</b></td>
                        </tr>
                        <?php
                        $id++; // Increment $id for the next iteration
                    }
                    ?>
                </tbody>
            </table>
            <div class="additional">
                <div>All donors: <strong><?= $donors_no?></strong></div>
                <div>Total donations: <strong><?= $totalamount?> $</strong></div>
            </div>
        </div>
    </main></body>

    <!-- <footer style="position: fixed; left: 0; right: 0; bottom:0; margin-top:50px;">
        <p>&copy; RRC - 2023. All rights reserved.</p>
    </footer> -->
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</html>
