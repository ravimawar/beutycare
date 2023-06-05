<?php
session_start();
require 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}	
$user=$_SESSION["user"];
$uid = $_SESSION['id'];
$qry1="SELECT * FROM reg_tbl where isactive=1 AND usertype='artist' AND id='".$uid."' ";
$rs1 = mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($rs1);
$uid=$row1["id"];
$qry2="SELECT * FROM reg_tbl where isactive=1 AND id='".$uid."'";
$rs2 = mysqli_query($conn,$qry2);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beauty Retreat</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
        	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/parsley.js"></script>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand">artist 

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav">
               
                <li class="dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    <li><a href="editprofile.php"><i class="fa fa-sign-out"></i> Edit Profile</a>
                        </li>
                    <li><a href="viewprofile.php"><i class="fa fa-sign-out"></i> View Profile</a>
                        </li>
                        <li><a href="changepassword.php"><i class="fa fa-sign-out"></i> Change Password</a>
                        </li>
                    
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <div class="user-img-div">
                             <?php
       if(mysqli_num_rows($rs2)>0){
            while($row2=mysqli_fetch_assoc($rs2))
            {
                $usertype=$row2['usertype'];
            if($usertype=="artist")
                {
             ?>

    
                             <img src="<?php echo $row2['profile_pic']?>" width="100" height="100" class="img-circle" >
      <?php
           }
        } 
    }
    ?>
                        </div>

                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Manage customer <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewcustomer.php"><i class="fa fa-user "></i>view customer</a>
                            </li>
                             
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Manage order<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="vieworder.php"><i class="fa fa-user "></i>view order</a>
                            </li>
                             
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-user "></i>Manage complain<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewcomplain.php"><i class="fa fa-user "></i>view complain</a>
                            </li>
                        </ul>
                    </li>
        <li>
                        <a href="#"><i class="fa fa-user "></i>Manage feedback<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewfeedback.php"><i class="fa fa-user "></i>view feedback</a>
                            </li>
                        </ul>
                    </li>
       
  					 <li>
                        <a href="#"><i class="fa fa-user "></i>Manage Contact<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="viewcontact.php"><i class="fa fa-user "></i>view contact</a>
                            </li>
                        </ul>
                    </li>
       
                    	 <li>
                        <a href="#" class="active-menu"><i class="fa fa-user "></i>Manage Schedule<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addtime.php"><i class="fa fa-user "></i>Add Time</a>
                            </li>
                     <li>
                                <a href="viewtime.php"><i class="fa fa-user "></i>View Time</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD TIME</h1>
                    </div>
                </div>
                <form action="addtimeprocess.php" method="get" id="demo-form" data-parsley-validate="">
	 <label for="exampleInputEmail1">Add Time</label>
    <input type="text" class="form-control" name="ad_t" placeholder="Enter Time" required/>
  <br>
  <label for="exampleInputEmail1">Status:</label>
   <select name="status">
   <option>Pending</option>
   <option>Booking</option>
   </select>
   <br>
  
	<input type="submit"  name="btn_sb">
</form></div></div></div>
<script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
</script>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
