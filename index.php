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
        <title>Welcome - Love In Action Organisation</title>
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
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


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/index1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>LET'S BE KIND FOR CHILDREN</h1>
                            <p>
                                Showing kindness to children through a charity organization is a heartwarming and essential endeavor.</br> By offering support, care, and resources, we help create a safe and nurturing environment where children can thrive.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/blog11.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>GET INVOLVED WITH HELPING HAND</h1>
                            <p>
                            Becoming a member of a charity organization is a direct and impactful way to support a cause you're passionate about, <br>contributing your time and resources to make a positive difference. 
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/index3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>BRINGING SMILES TO MILLIONS</h1>
                            <p>
                            Bringing a smile to people's faces is a simple yet powerful act of kindness that can brighten their day and uplift their spirits. <br> Whether through a friendly gesture, a heartfelt compliment, or an act of generosity
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about3.jpg"></div>
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


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-charity"></i>
                            </div>
                            <div class="service-text">
                                <h3>Advocate for need people</h3>
                                <p>Advocating for individuals in need is a noble and essential endeavor, aiming to ensure their rights, well-being, and inclusion in society. Advocates tirelessly work to raise awareness, lobby for policy changes, and provide crucial support to marginalized and vulnerable populations, fostering a fairer and more compassionate society.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-woman"></i>
                            </div>
                            <div class="service-text">
                                <h3>Empowering women especially teen mothers</h3>
                                <p>Empowering women is key to fostering gender equality and driving societal progress. When women are given the opportunity to thrive, they contribute significantly to positive change and greater overall well-being.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Provide education</h3>
                                <p>Providing education is a vital undertaking that equips people with knowledge and skills, paving the way for personal and societal growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Mental Health Care</h3>
                                <p>Mental health care is a vital component of healthcare, focusing on the well-being of the mind. It offers support, treatment, and resources to help individuals manage and recover from mental health challenges, ultimately improving their quality of life.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/event1.jpg">
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
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's Help the Needy</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes1.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div> -->
                            <!-- <div class="progress-text">
                                <p><strong>Needs:</strong> $15 Monthly</p>
                            </div> -->
                        </div>
                        <!-- <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div> -->
                        <!-- <div class="causes-btn">
                            <a class="btn btn-custom" href="child.php">Read More</a>
                            <a class="btn btn-custom" href="donate.php">Donate Now</a>
                        </div> -->
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes2.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div> -->
                            <!-- <div class="progress-text">
                                 <p><strong>Needs:</strong> $15 Monthly</p>
                            </div> -->
                        </div>
                        <!-- <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div> -->
                        <!-- <div class="causes-btn">
                            <a class="btn btn-custom" href="child.php">Read More</a>
                            <a class="btn btn-custom" href="donate.php">Donate Now</a>
                        </div> -->
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes3.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div> -->
                            <!-- <div class="progress-text">
                                <p><strong>Needs:</strong> $15 Monthly</p>
                            </div> -->
                        </div>
                        <!-- <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div> -->
                        <!-- <div class="causes-btn">
                            <a class="btn btn-custom" href="child.php">Read More</a>
                            <a class="btn btn-custom" href="donate.php">Donate Now</a>
                        </div> -->
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes4.jpg" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <!-- <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                    <span>85%</span>
                                </div>
                            </div> -->
                            <!-- <div class="progress-text">
                                <p><strong>Needs:</strong> $15 Monthly</p>
                            </div> -->
                        </div>
                        <!-- <div class="causes-text">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasell nec pretium mi. Curabit facilis ornare velit non vulputa</p>
                        </div> -->
                        <!-- <div class="causes-btn">
                            <a class="btn btn-custom" href="child.php">Read More</a>
                            <a class="btn btn-custom" href="donate.php">Donate Now</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->
        
        
        <!-- Donate Start -->
        <div class="donate" data-parallax="scroll" data-image-src="img/donate1.jpg">
            <div class="container">
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
                        <div class="payment_method display_none">
                            <img src="img/close.png" alt="Close btn" class="close_btn">
                            <div>Momo Pay: <p>670199</p></div>
                            <div>Mobile Money: <p>0785 688 867</p></div>
                            <div>Bank Account: </div>
                            <div class="complete" >Please Complete Donation</div>
                        </div>
                        <div class="donate-form">
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
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/together.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>30-Dec-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Kigali</p>
                                </div>
                                <div class="event-text">
                                    <h3>Together For the Holidays</h3>
                                    <p>
                                       Time for us to meet our beneficiaries and celebrate the holidays and our one year anniversary.
                                    </p>
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/invitation.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>30-Dec-23</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>Kigali</p>
                                </div>
                                <div class="event-text">
                                    <h3>Together For the Holidays</h3>
                                    <p>
                                        We would like for you join us in this special occasion.
                                    </p>
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->

        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer1.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form method="POST" action="submit volunteer.php">
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a member?" name="purpose" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a Member</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Member</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                Becoming a member of a charity organization is a direct and impactful way to support a cause you're passionate about, contributing your time and resources to make a positive difference.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
        
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
                                <h3>Name</h3>
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
                                <h3>Name</h3>
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
                                <h3>Name</h3>
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
                                <h3>Name</h3>
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
                            <a href="volunteer.php">Volunteer</a>
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
