<?php
session_start();
require 'dbconnect.php';
$qry1 = "SELECT * FROM area_tbl WHERE isactive=1";
$rs1=mysqli_query($conn,$qry1);

$qry = "SELECT * FROM security_question_tbl WHERE isactive=1";
$rs=mysqli_query($conn,$qry);
$usertype="artist";
$_SESSION['usertype']=$usertype;
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
                        <a href="#" ><i class="fa fa-user "></i>Manage user<span class="fa arrow"></span></a>
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
                        <a href="#" class="active-menu"><i class="fa fa-user "></i>Manage artist<span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">REGISTRATION</h1>
                      
                    </div>
                </div>
      
            <form action="artistprocess.php" method="get" id="demo-form" data-parsley-validate="">

                       <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter firstname" name="txt_fn" required/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter lastname" name="txt_ln" required/>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="txt_email" required/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" name="txt_mobile" required/>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Gender </label><br>
    <input type="radio" id="exampleInputEmail1"  name="gen" value="male"/>Male
  <input type="radio" id="exampleInputEmail1"  name="gen" value="female" required/>Female
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txt_pass" required/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Conform Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txt_cpass" required/>
  </div>
                                 <div class="form-group">
    <label for="exampleInputEmail1">Area Name:</label>
     <select name="area_id">
		<?php
		if(mysqli_num_rows($rs1)>0)
		{
			while($row1=mysqli_fetch_assoc($rs1))
			{
		?>
		<option value="<?php echo $row1['area_id']; ?>"><?php echo $row1['area_name']; ?></option>
		<?php
			}
		} 
		?>
	</select>
	</div>

    
                   <div class="form-group">
    <label for="exampleInputEmail1">Skill</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter skill" name="txt_skill" required/>
  </div>

                          <label for="exampleInputEmail1">discription </label>
   <textarea class="form-control" rows="3" placeholder="discription" name="txt_dis" required></textarea>
  
  
                                           <div class="form-group">
                          <?php
                          $qry1="SELECT * FROM security_question_tbl WHERE isactive=1";
                          $rs1=mysqli_query($conn,$qry1);
                            if(mysqli_num_rows($rs1)>0)
                              {
                                while($row1=mysqli_fetch_assoc($rs1))
                                  {
                                    ?>
                     
                                        
   <div class="form-group">
                                <label>Security Question</label>
                                <input type="text" class="form-control" data-required="true" id="sq1" name="sq<?php echo $row1['sq_id']; ?>" value="<?php echo $row1['sq'];?>" readonly>   
                              </div>
                            </td>
                            <td>
                              <div class="form-group">
                                <label>Security Answer</label>
                                <input type="text" class="form-control"  name="sa<?php echo $row1['sq_id']; ?>" data-required="true" placeholder="Enter Answer" required>      
                          </div>
                            </td>
                          </tr>
                          <?php }}?>  
                        </div>
                          <label for="exampleInputEmail1">Address </label>
   <textarea class="form-control" rows="3" placeholder="Address" name="txt_area" required></textarea>
<br>  <input type="submit"  name="btn_sb">
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
</script></form></div></div></div>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
