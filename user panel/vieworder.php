<?php
require 'dbconnect.php';
session_start();
//var_dump($_SESSION);die;
$uid=$_SESSION['id'];
$id=$_GET['artid'];
$tid=$_GET['tid'];
$_SESSION["artid"]= $id;
$_SESSION["tid"]= $tid;
//print_r($uid);die;
$qry = "SELECT * FROM cart_tbl ";
$rs=mysqli_query($conn,$qry);

// $row=mysqli_fetch_assoc($rs);
// $cart_id=$_row['id'];

$aid=$_SESSION['sid'];
$qry5="SELECT * FROM reg_tbl WHERE id=$aid";
$rs5=mysqli_query($conn,$qry5);
$row5=mysqli_fetch_assoc($rs5);
$qry4="SELECT * FROM reg_tbl WHERE id=$uid";
$rs4=mysqli_query($conn,$qry4);
$row4=mysqli_fetch_assoc($rs4);

$cart_id=$_SESSION['id'];

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
    <style>
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
*:before,
*:after {
  
     -moz-box-sizing: border-box;
         
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: .01%;
  overflow-x: auto;
}


</style>

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
                            <a href="vieworder.php"><img class="responsive" src="assets/img/finallogo.png" alt="Startkit"></a>
                        </div>
                       </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">
                                    <a href="service.php">Services</a>
                                </li>
                                 <li>
                                    <a href="loginartist.php">join as artist</a>
                                </li>
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
                                        <li class="active">
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
    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>order
                    </h2>
                    </div>
            </div>
        </div>
    </section><br><br>
    <h1 align="center">your information</h1><br><br>
    <div class="col-md-12">
           
   <table class="table" align="center">
            <tr class="info">
           
    <td> name</td>
    <td>mobileno</td>
    <td>address</td>
    </tr>
  
      <tr class="warning">
          
        <td><?php echo $row4['firstname'];?><?php echo $row4['lastname'];?></td>
        <td><?php echo $row4['mobileno'];?></td>
         <td><?php echo $row4['address'];?></td>
        
      </tr>
      </table>
      </div>
      
      <h1 align="center">artist information</h1><br><br>
      <div class="col-md-12">
           
   <table class="table" align="center">
            <tr class="info">
           
    <td> name</td>
    <td>mobileno</td>
    <td>address</td>
    </tr>
  
      <tr class="warning">
          
        <td><?php echo $row5['firstname'];?><?php echo $row5['lastname'];?></td>
        <td><?php echo $row5['mobileno'];?></td>
         <td><?php echo $row5['address'];?></td>
        
      </tr>

 
    
</table>
  </div>
    <h1 align="center">your order</h1><br><br>
    <div class="col-md-12">
           
	 <table class="table" align="center">
            <tr class="info">
           
		<td>Category name</td>
		<td>Price</td>
		</tr>
	<?php
	 $qry = "SELECT * FROM cart_tbl ";
	$total=0;
		
  //$qry="SELECT * FROM category";
  $rs=mysqli_query($conn,$qry);

 
		if(mysqli_num_rows($rs)>0){
			while($row=mysqli_fetch_assoc($rs))
			{ $total=$total+$row['price'];
				?>
			<tr class="warning">
					
				<td><?php echo $row['subcategory_name']?></td>
				<td><?php echo $row['price']?></td>
				

			</tr>
			 <?php
			}
		} 
	?>
	<div class="sub-total">
      <tr class="danger">
     <td><b>total</b></td>
     <td><b><?php echo $total?></b></td>
          </tr>
    
</table>
</div>
      <div class="row col-md-12">
      <div class="cart-buttons col-md-6" >
            <a href="Order.php" class="boxed-btn " >Confirm Order</a>
                    </div>
                     <div class="cart-buttons   col-md-6"  align="right" >
            <a href="Cancaleorder.php" class="boxed-btn" >Cancel Order</a>
           
                    </div>
                    </div>
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