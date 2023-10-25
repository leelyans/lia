
<?php
include 'conn.php'; // Include the database connection script
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Abtracts Submission</title>
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
        }
    </style>
</head>
<body>
  <header>
        <a href="index.php" class="logo">RRC - 2023</a>
        <nav>
            <ul>
                <li><a href="index.php">Registered Attendees</a></li>
                <li><a href="abstracts.php">Abstracts Submission</a></li>
                <li style="margin-right: 30px;"><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div style="width: 90%; margin-left:80px;">
            <?php include('newupload.php'); ?>

           <form method="POST" enctype="multipart/form-data">
<div class="container-fluid py-5">
    <div class="container pb-3">
        <h6 class=" text-center mb-1">Add New Announcement</h6>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="file">Add Image</label>
                        <input type="file" class="form-control-file" id="file" name="file" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="file">Announcement Title:</label>
                       <textarea class="form-control" id="title" name="title" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="blurb">Announcement Content:</label>
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
                </div>
    </div>
</div>
</form>


        </div>
    </main></body>

    <footer style="position: fixed; left: 0; right: 0; bottom:0; margin-top:500px;">
        <p>&copy; RRC - 2023. All rights reserved.</p>
    </footer>
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</html>
