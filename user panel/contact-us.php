<?php
require 'dbconnect.php';
session_start();
if(isset($_SESSION['user']))
{
	$user=$_SESSION["user"];
	$id=$_SESSION["id"];
}
else
{
	header("location:logincustomer.php?msg=unsuccess");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Hantus, Responsive, SPA Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Beauty Retreat</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
<div class="preloader">        
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <h1>Loading&hellip;</h1>
    </div>
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-md-left">
                    <p><i class="fas fa-clock"></i>Opening Hours - 10 Am to 8 PM</p>
                    <ul class="header-social d-inline-block">
                     </ul>
                    
                </div>
                <div class="col-lg-6 col-md-6 text-center text-md-right header-top-right">
                    <ul>
                        <li><a href="#"><i class="fas fa-envelope"></i>Shrutibeautycare@.com</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i>(+91)8141359060</a></li>
                        <?php
                        if(!isset($_SESSION['user']))
{
	?>

                         <li><img src="assets/images/icon2.png"><a href="logincustomer.php"></i>login</a></li>
                    <?php
                }
                    ?>
                    </ul>       
                </div>
            </div>
        </div>
    </section>
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                     <div class="logo main">
                            <a href="contact-us.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
                       </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul><li>
                         <a href="index.php">Home</a>
  							</li>
                                <li>
                                <li>
                                
                                    <a href="service.php">Services</a>
                                </li>
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                                <li class="c-dropdowns">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                    <?php
                                    if(isset($_SESSION['user']))
{
	$user=$_SESSION["user"];
	$id=$_SESSION["id"];
?>

                                       <li>
                                            <a href="logout.php">logout</a>
                                        </li>
                                     
                                     <li>
                                            <a href="editprofile.php">edit profile</a>
                                        </li>
                                        <li>
                                            <a href="viewprofile.php">view profile</a>
                                        </li>
                                         <li>
                                            <a href="changepassword.php">change password</a>
                                        </li>
                                     <?php
                                    }
                                    ?><li>
                                            <a href="complain.php">complain</a>
                                        </li>
                                        <li>
                                            <a href="feedback.php">feedback</a>
                                        </li>
                                         <li>
                                            <a href="aboutus.php">about us</a>
                                        </li>
                                       
                                       
                                     </ul>
                                </li>
                                <li class="c-dropdowns">
                                   
                                <li><a href="gallery.php">Gallery</a></li>
                                <li class="active"><a href="contact-us.php">Contact</a></li>
                                
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Start Mobile Menu -->
          <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="service.php">Services</a>
                                     
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                                <li class="c-dropdowns">
                                   <li class="c-dropdowns">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                    <?php
                                    if(isset($_SESSION['user']))
{
	$user=$_SESSION["user"];
	$id=$_SESSION["id"];
?>

                                    <li>
                                            <a href="logout.php">logout</a>
                                        </li>
                                     
                                     <li>
                                            <a href="editprofile.php">edit profile</a>
                                        </li>
                                        <li>
                                            <a href="viewprofile.php">view profile</a>
                                        </li>
                                        <li>
                                            <a href="aboutus.php">about us</a>
                                        </li>
                                       
                                         <li>
                                            <a href="changepassword.php">change password</a>
                                        </li>
                                        <?php
                                    }
                                    ?><li>
                                            <a href="complain.php">complain</a>
                                        </li>
                                        <li>
                                            <a href="feedback.php">feedback</a>
                                        </li>
                                        
                                     </ul>
                                </li>
                                <li class="c-dropdowns">
                                 <li><a href="gallery.php">Gallery</a></li>
                                <li class="active"><a href="contact-us.php">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>        
    </section>
    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Contact</h2>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-form">
                    <h2>Contact Form</h2>
                    <form action="contactprocess.php" method="get">

                        NAME: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" name="txt_fn" placeholder="name" id="input-08" required/>
                               <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                    
                            </span>

                            EMAIL: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="email" name="txt_email" placeholder="email" id="input-08"  required/>
                              
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                              

                            </span>

                        SUBJECT: <span class="input input--hantus">
                                <input class="input__field input__field--hantus" type="text" name="txt_sub" placeholder="subject" id="input-08"  required/>
                               
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                   
                            </span>

                        	MESSAGE: <span class="input input--hantus textarea"   >
                                <textarea class="input__field input__field--hantus" rows="5" id="input-10" placeholder="message" name="txt_msg" required></textarea>
                                
                                    <svg class="graphic graphic--hantus" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                    </svg>
                                 </span>

                           <button type="submit" name="btn_sb" class="boxed-btn">Send Message</button>
                         
                           
                       </form>
                </div>
                <div class="col-lg-6 contact-info mt-5 mt-lg-0">
                    <h2>Contact Information</h2>
                   
                    <div class="info-box mt-4">
                        <i class="fas fa-map-marker"></i>
                        <h4> Address:</h4>
                        <p>B-203, satyam appartment,sahibag,ahmedabad.
                         <br> shrutibeautycare@gmail.com </p>
                    </div>

                    
                    <div class="info-box">
                        <i class="fas fa-clock"></i>
                        <h4>Opening Hours:</h4>
                        <p>Monday-Sunday: 10 Am to 8 Pm  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                    <i class="ei ei-icon_mail"></i>
                    <h3>VISIT FOR NEWS AND MORE OFFRERS</h3>
                    <p>visit to latest news & great deals we offer</p>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                 </div>
            </div>
        </div>
    </section>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script>
   <script src="assets/js/custom.js"></script>
    </body>
</html>