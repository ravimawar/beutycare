<?php
session_start();
 require 'dbconnect.php';
if(isset($_COOKIE['user']))
{
  $us=$_COOKIE['user'];
  $ps=$_COOKIE['pass'];
}
else
{
  $us="";
  $ps="";
}
$msg="";
if (isset($_GET["msg"])) 
{
  $msg=$_GET["msg"];
}
$qry="SELECT * FROM reg_tbl WHERE email='".$_POST['txtforget_us']."'";
$rs=mysqli_query($conn,$qry);
$eml=$_POST['txtforget_us'];
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
                             
                         <li><img src="assets/images/icon2.png"><a href="logincustomer.php"></i>login</a></li>
                    
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
                            <a href="security_question.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
                       </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li class="active">
                                    <a href="index.php">Home</a>
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
                                   <li>
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
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li class="active">
                                            <a href="index.php">Home</a>
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
                        <h3>SECURITY QUESTION</h3>
                        
                        
                        </ul>
                    </div>
                    <div class="appoinment-wrapper">
                      	<form action="securityquestionprocess.php" method="post" name="securityquestionprocess">


              <div class="form-group">
    <input type="hidden" class="form-control" name="mail" value="<?php echo $_POST['txtforget_us']; ?>" autofocus />
  </div>
  
   		 <?php
            $sq_tbl="SELECT * FROM `security_question_tbl` WHERE `isactive`=1";
            $res = mysqli_query($conn,$sq_tbl);
            if(mysqli_num_rows($res))
            {
              while($rowq=mysqli_fetch_assoc($res))
              {
                ?>

<div class="form-group">
  <label for="exampleInputEmail1">Security Question</label>
    <input type="text" class="form-control" id="exampleInputPassword1"
    name="txt_us<?php echo $rowq['sq_id']; ?>" value="<?php echo $rowq['sq']; ?>" readonly  autofocus/>
  </div>
<div class="form-group">
  <label for="exampleInputEmail1">Answer</label>
    <input type="text" class="form-control" id="exampleInputPassword1"
    name="txt_answer<?php echo $rowq['sq_id']; ?>"   placeholder="Answer" autofocus required/>
  </div>
  			<?php    
              }
            }
          ?>

		
 <button type="submit" name="btn_sb" class="boxed-btn">Submit</button>
    
    </form>
    </path></svg></label></span></form></div></div></div></div></section></li></li></ul></nav></div></div></div></div></div></li></li></ul></nav></div></div></div></div></section>
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
    
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>