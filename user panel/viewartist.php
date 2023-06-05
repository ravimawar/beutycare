<?php
require 'dbconnect.php';
session_start();
//$uid=$_GET['sid'];
//var_dump($_SESSION);
$uid=$_SESSION["sid"];
//$id=$_SESSION["tid"];

$qry = "SELECT * FROM reg_tbl WHERE usertype='artist' AND id=$uid";
$rs = mysqli_query($conn,$qry);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from nayrathemes.com/demo/html/hantus/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 18:42:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Hantus, Responsive, SPA Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Hantus - Spa and Beauty HTML template</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- Start: Preloader
    ============================= -->

    <div class="preloader">        
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <h1>Loading&hellip;</h1>
    </div>

    <!-- End: Preloader
    ============================= -->

    <!-- Start: Header Top
    ============================= -->
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-md-left">
                    <p><i class="fas fa-clock"></i>Opening Hours - 10 Am to 6 PM</p>
                    <ul class="header-social d-inline-block">
                        <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                        <!--<li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
                     </ul>
                    
                </div>
                <div class="col-lg-6 col-md-6 text-center text-md-right header-top-right">
                    <ul>
                        <li><a href="#"><i class="fas fa-envelope"></i>Shrutibeautycare@.com</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i>(+91)8141359060</a></li>
                          
                    </ul>       
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= -->
    
    <!-- Start: Sidenav
    ============================= -->

    <div class="sidenav cart ">
        <div class="sidenav-header">
            <h3>Your cart</h3>
            <span class="fas fa-times close-sidenav"></span>
        </div>
        <div class="cart-item">
            <img src="http://placehold.it/80" alt="" class="cart-item-thumb">
            <div class="cart-item-description">
                <h4 class="cart-item-name">Lorem Pellentesque Ipsum</h4>
                <!--<p>$35.95</p>-->
            </div>
            <span class="cart-remove"><i class="fas fa-times"></i></span>
        </div>
        <div class="cart-item">
            <img src="http://placehold.it/80" alt="" class="cart-item-thumb">
            <div class="cart-item-description">
                <h4 class="cart-item-name">Lorem Pellentesque Ipsum</h4>
                <p>$35.95</p>
            </div>
            <span class="cart-remove"><i class="fas fa-times"></i></span>
        </div>
        <div class="cart-item">
            <img src="http://placehold.it/80" alt="" class="cart-item-thumb">
            <div class="cart-item-description">
                <h4 class="cart-item-name">Lorem Pellentesque Ipsum</h4>
                <p>$35.95</p>
            </div>
            <span class="cart-remove"><i class="fas fa-times"></i></span>
        </div>
        <div class="cart-item">
            <img src="http://placehold.it/80" alt="" class="cart-item-thumb">
            <div class="cart-item-description">
                <h4 class="cart-item-name">Lorem Pellentesque Ipsum</h4>
                <p>$35.95</p>
            </div>																										
            <span class="cart-remove"><i class="fas fa-times"></i></span>
        </div>

        <div class="sub-total">
            <h6>Sub Total <span>$150.75</span></h6>
        </div>

        <div class="cart-buttons">
            <a href="#" class="boxed-btn">View Cart</a>
            <a href="#" class="boxed-btn fl">Check Out</a>
        </div>
    </div>
    <span class="cart-overlay"></span>

    <!-- End: Sidenav
    ============================= -->

    <!-- Start: Navigation
    ============================= -->
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="index-2.html"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul><li>
                                    <a href="index-2.php">Home</a>
                                </li>
                                <li>
                                    <a href="service.php">Services</a>
                                </li>
                                 <li>
                                 <li class="active">
                                
                                    <a href="artist.php">artist</a>
                                </li>
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                                <li class="c-dropdowns">
                                    <!--<a href="#">Portfolio</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="portfolio-2-column.html">Portfolio 2 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-column.html">Portfolio 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-column.html">Portfolio 4 Column</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <li class="c-dropdowns">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                      <li>
                                            <a href="logout.php">logout</a>
                                        </li>
                                     
                                     <li>
                                            <a href="editprofile.php">edit profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="complain.php">complain</a>
                                        </li>
                                        <li>
                                            <a href="feedback.php">feedback</a>
                                        </li>
                                         <li>
                                            <a href="changepassword.php">change password</a>
                                        </li>
                                       
                                      </ul>
                                </li>
                                <li class="c-dropdowns">
                                    <!--<a href="#">Blog</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-full-width.html">Blog Full Width</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>-->

                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                                <li class="search-button">
                                    <div id="sb-search" class="sb-search " >
                                        <form>
                                            <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Search"  type="search" value="" name="search" id="search">
                                            <input class="sb-search-submit" type="submit"  value="">
                                            <span class="sb-icon-search"><i class="ei ei-search"></i></span>
                                        </form>
                                    </div>
                                </li>
                                <li class="cart-icon">
                                    <div id="cd-cart-trigge" class="cart-icon-wrapper cart--open">
                                        <i class="ei ei-icon_bag_alt"></i>
                                        <span class="cart-count">2</span>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 text-right">
                        <ul class="mbl d-lg-none">
                            <li class="search-button">
                                <div class="sb-search">
                                    <form>
                                        <input class="sb-search-input" onkeyup="buttonUp();" placeholder="Search"  type="search" value="" name="search">
                                        <input class="sb-search-submit" type="submit"  value="">
                                        <span class="sb-icon-search"><i class="ei ei-search"></i></span>
                                    </form>
                                </div>
                            </li>
                            <li class="cart-icon">
                                <div class="cart-icon-wrapper cart--open">
                                    <i class="ei ei-icon_bag_alt"></i>
                                    <span class="cart-count">2</span>
                                </div>
                            </li>
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
                                        <li class="active">
                                            <a href="index-2.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="service.php">Services</a>
                                        </li>
                                          <li>
                                    <a href="artist.php">artist</a>
                                </li>
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                                <li class="c-dropdowns">
                                    <!--<a href="#">Portfolio</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="portfolio-2-column.html">Portfolio 2 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-column.html">Portfolio 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-column.html">Portfolio 4 Column</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <li class="c-dropdowns">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                       <li>
                                            <a href="logout.php">logout</a>
                                        </li>
                                     
                                     <li>
                                            <a href="editprofile.php">edit profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="complain.php">complain</a>
                                        </li>
                                        <li>
                                            <a href="feedback.php">feedback</a>
                                        </li>
                                         <li>
                                            <a href="changepassword.php">change password</a>
                                        </li>
                                       
                                     </ul>
                                </li>
                                <li class="c-dropdowns">
                                    <!--<a href="#">Blog</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-full-width.html">Blog Full Width</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>-->

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
    <!-- End: Navigation
    ============================= -->

    <!-- Start: Breadcrumb Area
    ============================= -->

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Artist</h2>
                    </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: Our Service
    ============================= -->
<!--    <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <hr>
                        <p>These are the services we provide, these makes us stand apart.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service01.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Oil Massage</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>-->
                <!--skin care-->
                <!--<div class="col-lg-3 col-md-6 col-sm-6 mb-5">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service02.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Skin Care</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service03.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Natural Relaxation</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>-->
                <!--nail design-->
<!--                <div class="col-lg-3 col-md-6 col-sm-6 mb-5">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service04.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="subservies.php" class="boxed-btn">sub service</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Nails Design</h4>-->
                       <!-- <p class="price">$57.99</p>-->
            <!--        </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service05.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Make Up</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service06.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Waxing</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service07.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Hair Care</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="assets/img/service/service08.png" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <a href="#" class="boxed-btn">Book now</a>
                                </div>
                            </figcaption>
                        </figure>
                        <h4>Sauna</h4>
                        <p class="price">$57.99</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<section id="beauticians" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>Expert Beauticians</h2>
                        <hr>
                        <p>These are the people behind our success and failures. These guys never lose a heart.</p>
                    </div>
                </div>                
           
            </div>

           <div class="row">

<?php
		if(mysqli_num_rows($rs)>0){
			while($row=mysqli_fetch_assoc($rs))
			{
			$usertype=$row['usertype'];
			if($usertype=="artist")
				{
			 ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
                    <div class="single-beauticians">
                        <div class="img-wrapper">
                           <td><img src="<?php echo $row['profile_pic']?>" width="100" height="100"></td><br>
                          
<div class="beautician-footer-text"><br>
                               <h5> <td><?php echo $row['firstname']?></td>
                               <td><?php echo $row['lastname']?></td>
				</h5>
                                <p><td><?php echo $row['skill']?></td><br><p>
			            </div>
                        </div>
                        <div class="beautician-content">
                            <div class="inner-content">
                                <h5> <td><?php echo $row['firstname']?></td></h5>
                                <!--<p class="title">Founder</p>-->
                                <p><td><?php echo $row['discription']?></td></p>
                               </div>
                        </div>
                    </div>
                </div>
                  
                <?php
			}
		} 
	}
	?>
        <h1 align="center">     TIME SLOAT      </h1>
    
    <table border="2px">
    <br>
    <br>
    <tr>
    <td><h3>TIME</h3></td>
    <td> <h3>STATUS</h3></td>
    </tr>
    <tr>
    
    <form method="get" action="#" >
    
     <?php
    $qry1="SELECT * FROM `time_sloat` where id='".$uid."'  "; 
    $rs1 = mysqli_query($conn,$qry1);

        if(mysqli_num_rows($rs1)>0){
            while($row1=mysqli_fetch_assoc($rs1))
            {
                ?>
    
    <td><?php echo $row1['time']?></td>
    <td><?php echo $row1['status']?></td>
    </tr>
       <?php
}
}
?>
    </form>

    </table>

      </div> <br><br>    
    	<a href="bookingprocess.php?t_id=<?php echo $row['id']?>" class="boxed-btn">Booking Now</a>
        
                
               <!-- <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
                    <div class="single-beauticians">
                        <div class="img-wrapper">
                            <img src="assets/img/beauticians/beauticians02.jpg" alt="">
                            <div class="beautician-footer-text">
                                <h5>Emille Jenifer</h5>
                                <p>C.E.O</p>
                            </div>
                        </div>
                        <div class="beautician-content">
                            <div class="inner-content">
                                <h5>Emille Jenifer</h5>
                                <p class="title">C.E.O</p>
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                                                       </div>
                        </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-sm-0">
                    <div class="single-beauticians">
                        <div class="img-wrapper">
                            <img src="assets/img/beauticians/beauticians03.jpg" alt="">
                            <div class="beautician-footer-text">
                                <h5>Eric Matision</h5>
                                <p>Skin Expert</p>
                            </div>
                        </div>
                        <div class="beautician-content">
                            <div class="inner-content">
                                <h5>Eric Matision</h5>
                                <p class="title">Skin Expert</p>
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                                                      </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-beauticians">
                        <div class="img-wrapper">
                            <img src="assets/img/beauticians/beauticians04.jpg" alt="">
                            <div class="beautician-footer-text">
                                <h5>Betty Ross</h5>
                                <p>Massagist</p>
                            </div>
                        </div>
                        <div class="beautician-content">
                            <div class="inner-content">
                                <h5>Betty Ross</h5>
                                <p class="title">Massagist</p>
                                <p>It is a long established fact that a reader will be distracted by the readable.</p>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>

    
    <!-- End:  Our Service
    ============================= -->


    <!-- Start: Subscribe
    ============================= -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                    <i class="ei ei-icon_mail"></i>
                    <h3>SIGN UP FOR NEWS AND OFFRERS</h3>
                    </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <form id="subscribe-form" action="#" method="POST">
                        <input type="email" name="email" id="subscribe-mail" placeholder="Email" required>
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Subscribe
    ============================= -->

    <!-- Start: Footer Sidebar
    ============================= -->
   <!-- <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo"><img src="assets/img/logo.png" alt=""></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <ul class="widget-info">
                            <li><i class="fas fa-map-marker"></i>B-203,Shatyam App,Shahibug,Ahmedabad.</li>
                            <li><i class="fas fa-phone"></i>(+91)8141359060</li>
                            <li><i class="fas fa-envelope"></i>shrutibeautycare@gmail.com</li>
                        </ul>
                        
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-md-0 mb-4">
                    <aside class="widget widget_recent">
                        <h4 class="widget-title"><img src="assets/img/section-icon.png" alt="">Latest News</h4>
                        <ul>
                            <li class="latest-news">
                                <a href="#">
                                    <h6>F&O cues: Nifty 11100 Put adds 4.6 lakh shares in</h6>
                                    <p>Thurday, 25th January 2018</p>
                                </a>
                            </li>
                            <li class="latest-news">
                                <a href="#">
                                    <h6>Bharat Bijlee touched 52-week high on strong Q3</h6>
                                    <p>Thurday, 25th January 2018</p>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title"><img src="assets/img/section-icon.png" alt="">Quick Link</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Project</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Nail Care</a></li>
                            <li><a href="#">Massage</a></li>
                            <li><a href="#">Hair Cut</a></li>
                            <li><a href="#">Waxing</a></li>
                            <li><a href="#">Make Up</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <aside class="widget widdget-instagram">
                        <h4 class="widget-title"><img src="assets/img/section-icon.png" alt="">Instagram</h4>
                        <ul class="instagram-photos">                                
                            <li>
                                <img src="assets/img/instagram/instagram01.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                            </li>                                
                            <li>
                                <img src="assets/img/instagram/instagram02.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                                
                            </li>                                
                            <li>
                                <img src="assets/img/instagram/instagram03.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                            </li>                               
                            <li>
                                <img src="assets/img/instagram/instagram04.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                            </li>                                
                            <li>
                                <img src="assets/img/instagram/instagram05.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                                
                            </li>                                
                            <li>
                                <img src="assets/img/instagram/instagram06.jpg" alt="">
                                <div class="instagram-overlay">
                                    <a href="#">+</a>
                                </div>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>

        </div>
    </footer>-->
    <!-- End: Footer Sidebar
    ============================= -->

    <!-- Start: Footer Copyright
    ============================= -->

  <!--  <section id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text">
                    <ul>
                        <li><a href="#">&copy; 2018 Nayra Themes </a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12">
                    <ul class="text-lg-right text-center payment-method">
                        <li><a href="#"><img src="assets/img/payment-icon/mastercard.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment-icon/shopify.png" alt=""></a></li>
                        <li><a href="#"><i class="fab fa-paypal"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                    </ul>
                    <a href="#" class="scrollup"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- End: Footer Copyright
    ============================= -->


    
    <!-- Scripts -->
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
    
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
    
</body>


<!-- Mirrored from nayrathemes.com/demo/html/hantus/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Nov 2018 18:43:10 GMT -->
</html>