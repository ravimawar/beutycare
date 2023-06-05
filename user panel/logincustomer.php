<?php
session_start();
if(isset($_COOKIE['user']))
{
    $un = $_COOKIE['user'];
    $ps = $_COOKIE['pass'];
   }
else{
    $un="";
    $ps="";
}
$msg="";
if (isset($_GET["msg"])) 
{
  $msg=$_GET["msg"];
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

    <!-- Custom CSS -->
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
    <div class="coming-soon-wrapper text-center">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><a href="#"><img src="assets/new image/2.png" alt=""></a></div>
                    <h1>Login </h1>
                    </div>
                                <div class="col-md-12">
                    </div>
				<div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3 offset-0">
                    <div class="subscribe-wrapper">
                        <form class="subscription-form" method="POST" action="checklogincustomer.php" >
                            <div class="subscribe-box">
                                <input type="email" class="form-control" id="subscribe-input" name="txt_un" placeholder="Enter your email here" required>
                                <br>
                                <br>
                                <input type="password" class="form-control" id="subscribe-input" name="txt_ps" placeholder="Enter your password here" required>
                                <br>
                                <br>
                                <button type="submit" class="boxed-btn" name="btn_sb">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <footer id="footer-area">
                        <div class="container">
                            <h3> <a href="registrationcustomer.php">Create New Account</a></h3><br>
                            <h3> <a href="forgetpassword.php">Forget Password</a></h3><br>
                        </div>
                         <a href="#" class="scrollup"><i class="fas fa-arrow-up"></i></a> 
                    </footer>
                </div>
            </div>
        </div>
    </div>
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
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $('[data-countdown]').each(function () {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function (event) {
                $(this).find(".days").html(event.strftime("%D"));
                $(this).find(".hours").html(event.strftime("%H"));
                $(this).find(".minutes").html(event.strftime("%M"));
                $(this).find(".seconds").html(event.strftime("%S"));
            });
        });
    </script>
</body>