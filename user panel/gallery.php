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
                            <a href="gallery.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
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
                                   
                                <li class="active"><a href="gallery.php">Gallery</a></li>
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
                                 <li class="active"><a href="gallery.php">Gallery</a></li>
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
                    <h2>Gallery</h2>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
     <section id="gallery" class="section-padding gallery-page">

        <div class="container-fluid">
            <div class="row gallery" id="grid">
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item">
                    <figure>
                        <img src="assets/images/11.jpg" alt="" height="50px" width="50px">
                        <figcaption >
                            <div class="inner-text">
                                <ul>
                                    
                                    <li><a  class="popup" href="assets/images/11.jpg" height="50px" width="50px"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>Make-Up</h4>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/thGGNHK3SL.jpg" alt="" height="50px" width="50px">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/thGGNHK3SL.jpg" height="50px" width="50px"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>Make-Up</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/thRXJN1Y8U.jpg" alt="" height="100px" width="100px">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/thRXJN1Y8U.jpg"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>WEXING</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>

                 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/2.jpg" alt="" height="100px" width="100px">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/2.jpg" v><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>HAIR CUTTING</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/th.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/th.jpg"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>NAIL ART</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
               
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/4.PNG" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/4.PNG"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>EYE BROW</h4>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/thGSXQOQ8Z.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/thGSXQOQ8Z.jpg"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>MEKUP</h4>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item">
                    <figure>
                        <img src="assets/images/thRXJN1Y8U.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/thRXJN1Y8U.jpg"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>WEXING</h4>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
              
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/1.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/1.jpg"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>MEKUP</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/facial.PNG" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/facial.PNG"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>FACIAL</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/4.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/4.jpg" height="100px" width="100px"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>HAIR CARE</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 gallery-item" >
                    <figure>
                        <img src="assets/images/nail art.jpg" alt="">
                        <figcaption>
                            <div class="inner-text">
                                <ul>
                                    <li><a class="popup" href="assets/images/nail art.jpg" height="100px" width="100px"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h4>NAIL ART</h4>
                               
                            </div>
                        </figcaption>
                    </figure>
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
   <script src="assets/js/custom.js"></script>
    </body>

</html>