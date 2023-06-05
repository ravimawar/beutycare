<?php
session_start();
require 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("location:login.php");
}	
$user=$_SESSION["user"];
$uid = $_SESSION['id'];
//print_r($uid);die;
$qry1="SELECT * FROM reg_tbl where isactive=1 AND usertype='artist' AND id='".$uid."' ";
$rs1 = mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($rs1);
$uid=$row1["id"];
$qry2="SELECT * FROM reg_tbl where isactive=1 AND id='".$uid."'";
$rs2 = mysqli_query($conn,$qry2);
$qry3 = "SELECT * FROM order_tbl WHERE isactive!=2 AND artist_id='".$uid."'";
//print_r($qry3);die;
$rs3=mysqli_query($conn,$qry3);
$qry4 ="SELECT user_id FROM order_tbl";

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
                        <a href="dashboard.php" ><i class="fa fa-dashboard "></i>Dashboard</a>
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
                        <a href="#" class="active-menu"><i class="fa fa-user "></i>Manage order<span class="fa arrow"></span></a>
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
                        <a href="#"><i class="fa fa-user "></i>Manage Schedule<span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">VIEW ORDER</h1>
                    </div>
                </div>
             <div class="panel-body">
                             <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                   <thead>
<tr>
		<td>Name</td>
		<td>subcategoryname</td>
		<td>Price</td>
		<td>time</td>
		<td>date</td>
	</tr>
	<?php
		if(mysqli_num_rows($rs3)>0){
			while($row3=mysqli_fetch_assoc($rs3))
			{ 	$uid11 = $row3['user_id'];
				$sid11= $row3['sub_id']; 
				$tid11 = $row3['t_id'];
				$qry11 = "SELECT * FROM reg_tbl WHERE id=$uid11";
				$rs11 = mysqli_query($conn,$qry11);
				$row11=mysqli_fetch_assoc($rs11);
				$qry12 = "SELECT * FROM sub_category_tbl WHERE sub_id=$sid11";
				$rs12 = mysqli_query($conn,$qry12);
				$row12=mysqli_fetch_assoc($rs12);
				$qry13 = "SELECT * FROM time_sloat WHERE t_id=$tid11";
				$rs13 = mysqli_query($conn,$qry13);
				$row13=mysqli_fetch_assoc($rs13);
				
				?>
			<tr><td><?php echo $row11['firstname']?> <?php echo $row11['lastname']?></td>
				<td><?php echo $row12['subcategory_name']?></td>
				
				<td><?php echo $row3['price']?></td>
				<td><?php echo $row13['time']?></td>
				<td><?php echo $row3['doi']?></td>
			 		</tr>	

<?php
			}
		} 
	?>


                                </table>
                            </div>
                        </div>
                    </div>
                        </div></thead></table></div></div></div></div></div></div>
                 
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
