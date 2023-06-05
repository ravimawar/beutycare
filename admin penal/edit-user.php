<?php
require 'dbconnect.php';
session_start();
$id="";
if(isset($_GET['id']))
{
 $id=$_GET['id'];              
}
$qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry4 = "SELECT * FROM reg_tbl WHERE usertype='admin' AND isactive=0 OR isactive=1";
$rs4 = mysqli_query($conn,$qry4);

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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand">Admin 

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
        if(mysqli_num_rows($rs4)>0){
            while($row4=mysqli_fetch_assoc($rs4))
            {
                $usertype=$row4['usertype'];
            if($usertype=="admin")
                {
             ?>

    
                             <img src="<?php echo $row4['profile_pic']?>" width="100" height="100" class="img-circle" >
      <?php
            }
        } 
    }
    ?>
                        </div>

                    </li>
                    <li>
                        <a href="Dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Manage area <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addarea.php"><i class="fa fa-user "></i>add area</a>
                            </li>
                             <li>
                                <a href="viewarea.php"><i class="fa fa-user "></i>view area</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Manage category<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addcategory.php"><i class="fa fa-user "></i>add category</a>
                            </li>
                             <li>
                                <a href="viewcategory.php"><i class="fa fa-user "></i>view category</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-user "></i>Manage sub-category<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addsubcategory.php"><i class="fa fa-user "></i>add sub-category</a>
                            </li>
                             <li>
                                <a href="viewsubcategory.php"><i class="fa fa-user "></i>view sub-category</a>
                            </li>
                            
                        </ul>
                    </li>
       

                     <li>
                        <a href="#"  class="active-menu"><i class="fa fa-user "></i>Manage user<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                          <li>
                                <a href="adduser.php"><i class="fa fa-user "></i>add user</a>
                            </li>
                           
                            <li>
                                <a href="viewalluser.php"><i class="fa fa-user "></i>view user</a>
                            </li>
                            
                        </ul>
                    </li>
                   

                    <li>
                        <a href="#"><i class="fa fa-user "></i>Manage artist<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                          <li>
                                <a href="addartist.php"><i class="fa fa-user "></i>add artist</a>
                            </li>
                           
                            <li>
                                <a href="viewallartist.php"><i class="fa fa-user "></i>view artist</a>
                            </li>
                            
                        </ul>
                    </li>
      
                  
                                  <li>
                        <a href="#"><i class="fa fa-user "></i>Manage security-question<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                         <li>
                                <a href="addquestion.php"><i class="fa fa-user "></i>add question</a>
                            </li>
                            
                            <li>
                                <a href="viewquestion.php"><i class="fa fa-user "></i>view question</a>
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
                        <h1 class="page-head-line">EDIT USER</h1>
                
                 
                    </div>
                </div>
   <form action="updateuser.php" method="GET">
      <table>		
			<input type="hidden" name="id" value="<?php echo $row['id']?>"><br>
			 <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" value="<?php echo $row['firstname']?>" name="txt_fn"/>
  </div><br>
  
  <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="txt_ln" value="<?php echo $row['lastname']?>"/>
  </div><br>
 <label for="exampleInputEmail1">mobileno:</label>
    <input type="text" class="form-control" name="txt_mobile" value="<?php echo $row['mobileno']?>"/>
  </div><br>
				
<label for="exampleInputEmail1">gender:</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $row['gender']?>"/>
  </div><br>
<label for="exampleInputEmail1">address:</label>
    <input type="text" class="form-control" name="address" value="<?php echo $row['address']?>"/>
  </div>
			<br>	
		<input type="submit" name="btn_sb">
</table>
		</form>
        </div></div></div>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
