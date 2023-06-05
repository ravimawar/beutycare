<?php
session_start();
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
                            <a href="aboutus.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
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
                                <li><a href="contact-us.php">Contact</a></li>
                                
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
                                <li><a href="contact-us.php">Contact</a></li>
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
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>ABOUT US</li>

                    </ul>
                    <br>
                    <br>
<h4><font color="white"><p>email id:-  shrutibeautycare@gmail.com</p></font></h4>
                    <br>
                   
<h4><font color="white"><p>mobile no:(+91)8141359060</p></p></font></h4>
                    <br>
                   
<h4><font color="white"><p>address:B-203,Satyam App.Shahibuag,Ahmedabad.</p></font></h4>
                    <br>
                    
<h4><font color="white"><p>we are provide good artist.</p></font></h4>
                    <br>
                   
<h4><font color="white"><p>we are also provide good servies</p></font></h4>
                    <br>
                    <h4><font color="white"><p>we are also provide flexible timeservies so  choose time as per choise. </p></font></h4>
                    <br>
               <div class="info-box">
                        
                       <h4><font color="white"> Opening Hours:</font></h4>
                        <h4><font color="white"><p>Monday-Sunday: 10 Am to 8 Pm</p></h4></font>

   

                </div>
            </div>
        </div>
    </section>
    <!--<section id="subscribe">
        <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                    <i class="ei ei-icon_mail"></i>
                    <h3>SIGN UP FOR NEWS AND OFFRERS</h3>
                    <p>Subcribe to lastest smartphones news & great deals we offer</p>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <form id="subscribe-form" action="#" method="POST">
                        <input type="email" name="email" id="subscribe-mail" placeholder="Email" required>
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>-->
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
    
    <!-- Map Script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>