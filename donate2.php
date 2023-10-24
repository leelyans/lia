<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Join hands with US | LIA</title>
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
    </head>
    <style>
        .payment_method{
            width: 100%;
            background-color: rgba(0, 0, 0, 0.377);
            padding: 1rem;
            display: flex;
            flex-direction: column;
            margin: -3rem 0 2rem 0;
        }
        .payment_method img{
            width: 1rem;
            margin: auto 0 auto auto;
            cursor: pointer;
        }
        .payment_method .complete{
            margin: 2rem auto 0 auto;
            font-size: 22px;
            text-transform: uppercase;
            font-weight: bold;
            color: #fff;
            cursor: default;
        }
        .payment_method div{
            display: flex;
            font-size: larger;
            color: black;
        }
        .payment_method div p{
            margin: 0 0 0 1rem;
            font-weight: bold;
            color: white;
        }
        .display_none{
            display: none;
        }
    </style>

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
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="event.php" class="nav-item nav-link">Events</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Get Involved</a>
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
                        <h2>Donate Now</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="donate.php">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="container">
            <div class="donate" data-parallax="scroll" data-image-src="img/donate1.jpg">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>Let's donate to needy people for better lives</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                Donating to needy people is a powerful and compassionate act that has the potential to transform lives. These acts of generosity provide essential resources, such as food, clothing, shelter, and education, to those facing adversity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <div class="payment_method">
                                <img src="img/close.png" alt="Close btn" class="close_btn">
                                <div>Momo Pay: <p>670199</p></div>
                                <div>Mobile Money: <p>0785 688 867</p></div>
                                <div>Bank Account: </div>
                                <div class="complete" >Please Complete Donation</div>
                            </div>
                            <!-- <form method="POST" action="submit_donate.php"> -->
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
                                </div>
                                <div>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="donation_option" value="10"> $10
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="donation_option" value="20"> $20
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="donation_option" value="30"> $30
                                    </label>
                                    <input type="number" name="custom_amount" class="btn btn-custom" value="custom" placeholder="Custom $"><br><br>
                                </div>
                                <div>
                                    <button class="btn btn-custom" class="submit_donate" onclick="pay()">Donate Now</button>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


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
                            <a href="member.php">Member</a>
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

        <script src="js/main.js"></script>

        <script>
            const payment_method = document.querySelector(".payment_method");
            const close_btn = document.querySelector(".close_btn");

            function pay() {
                payment_method.classList.remove("display_none");
            }

            close_btn.addEventListener("click", () => {
                payment_method.classList.add("display_none");
            });
        </script>
    </body>
</html>
