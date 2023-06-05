<?php
require 'dbconnect.php';
if (isset($_POST["msg"])) 
{
  $msg=$_POST["msg"];
}
                

                $user_id="";
                    if(isset($_POST['reg_id']))
                    {
                      $user_id=$_POST['reg_id'];
                    }
                   $qry="SELECT * FROM reg_tbl WHERE id=$user_id";
                    $rs=mysqli_query($conn,$qry);
                    $email="";
                    if(mysqli_num_rows($rs)>0)
                     {
                      $row=mysqli_fetch_assoc($rs);
                      $email=$row['email'];
                    }
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="#">change password

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="">
               
                <li class="">
                  <a class="" data-toggle="" href="#" aria-expanded="">
                       <i class=""></i>  <i class=""></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
            </ul>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.jpg" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> change password </strong></a>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">change password </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           change password
                        </div>
                        <div class="panel-body">
<form name="changepassword" action="changepasswordprocess.php" method="GET">
   
  <div class="form-group">
    <input type="text" class="form-control"  name="email" placeholder="E-mail" value="<?php echo $email?>" />
  </div>
  <div class="form-group">
    <input type="password" class="form-control"  name="newpass" placeholder="new Password"" />
  </div>
  <div class="form-group">
    <input type="password" class="form-control"  name="newcpass" placeholder="Retype Password" " />
  </div>
  <input type="submit" name="btn_sb" value="Submit"/>
      
    </form>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
