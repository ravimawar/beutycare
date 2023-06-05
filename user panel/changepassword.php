<?php
require 'dbconnect.php';
session_start();
if (isset($_SESSION['user'])) 
{
  $user=$_SESSION['user'];
  $uid=$_SESSION['id'];
}               
else
{
	$user="";
	$uid="";
}
               $qry = "SELECT * FROM reg_tbl WHERE id=$uid";
                    $rs=mysqli_query($conn,$qry);
                    $email="";
                   if(mysqli_num_rows($rs)>0)
                    {
                     $row=mysqli_fetch_assoc($rs);
                      $email=$row['email'];
                    }
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
                            <a href="changepassword.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
                       </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="service.php">Services</a>
                                </li>
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                                <li class="c-dropdowns" class="active">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
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
                                    <li>
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
                                <li class="search-button">
                                                  </ul>
                    </div>
                </div>
            </div>
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
                                        </li>
                                          
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
                               <li class="c-dropdowns">
                                   <li class="c-dropdowns" class="active">
                                    <a href="#">Pages</a>
                                    <ul class="cr-dropdown-menu">
                                   

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
                                    <li>
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

   <section id="appoinment" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="opening-hours">
                        <h3>CHANGE PASSWORD</h3>
                        
                        
                        </ul>
                    </div>
                    <div class="appoinment-wrapper">
                       <form name="changepassword" action="changepasswordprocess.php" method="GET">
<div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $email?>" readonly autofocus/>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password" name="oldpass" required/>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password" name="newpass" required/>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Retype Password" name="newcpass" required/>
  </div>
    
                           
  <button type="submit" name="btn_sb" class="boxed-btn">Submit</button>
                            
    </form></div></div></div></div></section></li></li></ul></nav></div></div></div></div></div></li></li></ul></nav></div></div></div></div></section>
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