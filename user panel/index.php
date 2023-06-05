
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
    <link rel="shortcut icon" href="assets/new image/favicon.png" type="image/x-icon" />
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
                        <li><a href="#"><i class="fas fa-envelope"></i>Shrutibeautycare@gmail.com</a></li>
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
                            <a href="index.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
               
                              
                       </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li class="active">
                                    <a href="">Home</a>
                                </li>
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
                                <li class="search-button">
                                                  </ul>
                    </div>
                </div>
            </div>
           <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="logo main">
                           
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li class="active">
                                            <a href="">Home</a>
                                        </li>
                                        <li>
                                            <a href="service.php">Services</a>
                                        </li>
                                        
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
         </div>        
    </section>
    <header>
        <div class="row">
            <div class="col-md-12">
                <div class="header-slider">
                    <div class="header-single-slider">
                        <figure>
                            <img src="assets/img/sliders/slider01.jpg" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                        <h3>Welcome To Shruty Beauty Care</h3>
                                        <h1>Beauty Wellness</h1>
                                        <p>The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.</p>
                                        <a href="service.php" class="boxed-btn">Make an Appoinment</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="assets/img/sliders/slider02.jpg" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-center">
                                        <h3>Welcome To Shruty Beauty Care</h3>
                                        <h1>Beauty Wellness</h1>
                                        <p>The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.</p>
                                        <a href="service.php" class="boxed-btn">Make an Appoinment</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="header-single-slider">
                        <figure>
                            <img src="assets/img/sliders/slider03.jpg" alt="">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-right">
                                        <h3>Welcome To Shruty Beauty Care</h3>
                                        <h1>Beauty Wellness</h1>
                                        <p>The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.</p>
                                        <a href="service.php" class="boxed-btn">Make an Appoinment</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <section id="contact">
        <div class="container contact-wrapper text-center text-xl-left">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact">
                    <img src="assets/img/icons/icon01.png" alt="">
                    <h4>Opening Time</h4>
                    <p>Mon - Sun: 10:00 - 8:00</p>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact">
                    <img src="assets/img/icons/icon02.png" alt="">
                    <h4>Address</h4>
                    <p>B-203,Satyam App.Shahibuag,Ahmedabad.</p>
                </div>
                <div class="col-xl-4 offset-xl-0 col-md-6 col-sm-6 offset-sm-3 single-contact">
                    <img src="assets/img/icons/icon03.png" alt="">
                    <h4>Telephone</h4>
                    <p>
                (+91)8141359060</p>
                </div>
            </div>
        </div>
    </section>
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>Feature</h2>
                        <hr>
                        <p>How to Have a Healthier and More Productive Home Office</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="feature-box text-center">                        
                        <div class="feature-icon">
                            <img src="assets/img/feature-icon/feature-icon01.png" alt="">
                        </div>
                        <h4>Hair Expert</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="feature-box text-center">                        
                        <div class="feature-icon">
                            <img src="assets/img/feature-icon/feature-icon02.png" alt="">
                        </div>
                        <h4>Stone Massage</h4>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-sm-0">                    
                    <div class="feature-box text-center">                        
                        <div class="feature-icon">
                            <img src="assets/img/feature-icon/feature-icon03.png" alt="">
                        </div>
                        <h4>Nail Care</h4>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">                    
                    <div class="feature-box text-center">                        
                        <div class="feature-icon">
                            <img src="assets/img/feature-icon/feature-icon04.png" alt="">
                        </div>
                        <h4>Aromatherapy Nature</h4>
                       
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
    <script src="assets/js/custom.js"></script>
    
</body>
</html>