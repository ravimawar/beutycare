<?php
session_start();
require 'dbconnect.php';
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
    ?></div>

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
                        <a href="#" class="active-menu"><i class="fa fa-user "></i>Manage sub-category<span class="fa arrow"></span></a>
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
                        <h1 class="page-head-line">VIEW SUB-CATEGORY</h1>
                    </div>
                </div>
     
                 <div class="panel-body">
                             <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                       
                                      <tr>
        <td>category name</td>
		<td>sub-category Name</td>
		<td>profile_pic</td>
		<td>price</td>
		<td>Isactive</td>
		<td>date of insert</td>
		<td>date of update</td>
		<td>Delete</td>
		<td>change</td>
		<td>edit</td>
		
	</tr>
	<?php
  $qry = "SELECT * FROM sub_category_tbl";
  //$qry="SELECT * FROM category";
  $rs=mysqli_query($conn,$qry);
  ?>
  
	<?php
		if(mysqli_num_rows($rs)>0){
			while($row=mysqli_fetch_assoc($rs))
			{
				if($row['isactive']==1 OR $row['isactive']==0) 
        {


        $qry1 = "SELECT * FROM service_category_tbl WHERE isactive=1 AND sc_id=$row[sc_id]";
     
        $rs1=mysqli_query($conn,$qry1);
        $row1=mysqli_fetch_assoc($rs1);

         ?>
			<tr>
				
				<td><?php 
				$sc_id = $row['sc_id'];
				$qry2 = "SELECT * FROM service_category_tbl WHERE `sc_id`='".$sc_id."'";
				
				$rs2 = mysqli_query($conn,$qry2);
					if(mysqli_num_rows($rs2)>0)
					{
						while($row2=mysqli_fetch_assoc($rs2))
						{
				echo $row2['sc_name'];
                }}?></td>
				<td><?php echo $row['subcategory_name']?></td>
				<td><img src="<?php echo $row['profile_pic']?>" width="100" height="100"></td>
				<td><?php echo $row['price']?></td>
				
				<td><?php echo $row['isactive']?></td>
				<td><?php echo $row['date_of_insert']?></td>
				<td><?php echo $row['date_of_update']?></td>
				<td><a href="deletesubcategory.php?id=<?php echo $row['sub_id']?>">delete</a></td>
				<td><a href="blocksubcategory.php?id=<?php echo $row['sub_id']?>">change</a></td>
                <td><a href="edit-subcategory.php?id=<?php echo $row['sub_id']?>">Edit</a></td>    	              
		
			</tr>	

<?php
			}
	}
		} 
	?>  
	                        </table>
                            </div>
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
