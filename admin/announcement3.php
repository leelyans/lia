<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RRC - 2023 rehabilitation Conference</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rwanda Conference" name="keywords">
    <meta content="Rehabilitation " name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/fav.png" type="image/png">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <strong class="py-2">Join the 1st Rwanda Rehabilitation Conference 2023</strong>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-clock me-2"></i>November 24-25</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+250 788 111 111</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <img src="img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="committee.html" class="nav-item nav-link ">Committe</a>
                <a href="abstractbefore.html" class="nav-item nav-link ">Abstract Submission</a>
                <a href="partners.html" class="nav-item nav-link">Our Partners</a>
                <a href="announcement.html" class="nav-item nav-link active">Announcements</a>
            </div>
            <a href="register.html" class="btn btn-primary py-2 px-4 ms-3">Register</a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Announcements</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Announcements</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

 <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
        <div class="container" >
            <div class="row" >

                
                <div class="col-lg-12" style="height:200px; margin-bottom: 1000px;">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">


                <?php
// Load the announcement data from the JSON file
$announcement_data = json_decode(file_get_contents('announcement.json'), true);

// Check if the data was successfully loaded
if ($announcement_data !== null) {
    // Display Announcements
    foreach ($announcement_data as $announcement) {
        ?>


         <div class="price-item pb-4">
                            <div class="position-relative"  >
                                <img class="img-fluid rounded-top" src="<?php echo $announcement['image_link']; ?>" alt="" >
                               
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4><?php echo $announcement['title']; ?></h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <?php echo $announcement['content']; ?>
                               
                            </div>
                        </div>


       
        <?php
    }
} else {
    echo 'Failed to load announcement data.';
}
?>






                        <div class="price-item pb-4">
                            <div class="position-relative"  >
                                <img class="img-fluid rounded-top" src="img/announc.jpeg" alt="" >
                               
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4> Announcement 1</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                               
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/announc.jpeg" alt="">
                                
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4> Announcement 2</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative" >
                                <img class="img-fluid rounded-top" src="img/announc.jpeg" alt="" >
                                
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4> Announcement 3</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    
  <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
    <div class="row g-5 pt-4">
        <div class="col-lg-4 col-md-6">
            <h3 class="text-white mb-4">Quick Links</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Committee</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Abstract Submission</a>
                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Announcements</a>
                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Register</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <h3 class="text-white mb-4">Get In Touch</h3>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Kigali - Rwanda</p>
            <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>example@mail.com</p>
            <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+250 788 111 111</p>
        </div>
        <div class="col-lg-4 col-md-6">
            <h3 class="text-white mb-4">Follow Us</h3>
            <div class="d-flex">
                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="rwandarehabconference.com">RRC - 2023</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="">COM Agency</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>