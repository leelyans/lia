<?php
include("conn.php");

// Initialize variables
$volunteers_no = 0;
$amount = 0;

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
    $amount = $amount_data['total_amount'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>About US | Love In Action</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/logo2.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
            .team h4{
    font-size: 15px;
}

        </style>
    </head>

    <body>
       <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+250 787 930 487</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>loveinactionorganization@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">
            <img src="img/logo1.png" alt="LIA Logo" >
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
                        <a href="event.php" class="nav-item nav-link">Events</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Get Invloved</a>
                            <div class="dropdown-menu">
                                <a href="donate.php" class="dropdown-item">Donate Now</a>
                                <a href="member.php" class="dropdown-item">Become A Member</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about4.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Non-profit charity organization in Rwanda</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    We are a dedicated entity that operates for the greater good and the advancement of a specific cause or social issue. We serve as instruments of positive change, mobilizing resources and efforts to make a meaningful impact on the world. We often encompasses a wide range of areas, from humanitarian aid and poverty reduction to environmental conservation and helping the needy.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Easing poverty, empowering women, providing education in local community by providing food, shelter, and educational resources to those in need. We are committed to creating a more equitable society where every person has the opportunity to lead a dignified and fulfilling life.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Our vision is a world where every child has access to quality education, poverty and hunger eradicated and communities growing in harmony with the environment.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/event3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                                <p>Beneficiaries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up"><?=$volunteers_no?></h3>
                                <p>Members</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up"><?=$amount?></h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome Guys behind our Charity activities</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>BAYITO Egide</h2>
                                <h4>Founder & Country Director</h4>
                                <p>
                                    <br>
                                    bayitoegide@gmail.com<br>
                                    +250 787 930 487<br>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>RURAMIRA Tiana</h2>
                                <h4>Internal Relations Assistant</h4>
                                <p>
                                     <br>
                                  ruramitiana710@gmail.com  <br>
                                    +250 786 175 908 <br>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>SUGIRA Patrick</h2>
                                <h4>Legal Advisor </h4>
                                <p>
                                    <br>
                                   sugira.patrick2@gmail.com <br>
                                 +250 787 637 422 <br>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Viviane NYIRAMANA</h2>
                                <h4> Director of Finance </h4>
                                <p>
                                   <br>
                                    viviane.nyiramana21a@kepler.org <br>
                                    +250 783 953 862 <br>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee5.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>NTSINZI Anselme</h2>
                                <h4> Internal Relations </h4>
                                <p>
                                    <br> 
                                   ntsinziahmed@gmail.com <br> 
                                   +250 788 531 326 <br>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/comittee6.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>KARAMBIZI Kelley Shima</h2>
                                <h4>Public Relations Assistant</h4>
                                <p>
                                     <br> 
                                   Kelleyshima20@gmail.com <br>
                                   +250 783 318 156 <br>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Testimonial Start -->
        <!-- <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/team0.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/team0.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/team0.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/team0.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Kigali</p>
                            <p><i class="fa fa-phone-alt"></i>+250 787 930 487</p>
                            <p><i class="fa fa-envelope"></i>loveinactionorganization</br>@gmail.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                             <h2>Popular Links</h2>
                            <a href="index.php">Welcome</a>
                            <a href="about.php">About us</a>
                            <a href="donate.php">Donate</a>
                            <a href="member.php">Members</a>
                            <a href="event.php">Events</a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Love In Action</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="">COM Agency</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
