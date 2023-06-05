<?php
session_start();
require 'dbconnect.php';
if(!isset($_POST["btn_sb"]))
{
	header("location:login.php");
	exit();
}
$us=$_POST['txt_un'];
$ps=$_POST['txt_ps'];

$qry="SELECT * FROM reg_tbl WHERE email='".$us."' AND password='".$ps."' AND isactive=1";
$rs = mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$row = mysqli_fetch_assoc($rs);

	echo "Found";
	$uid= $row['id'];
	$_SESSION["user"]=$us;
	$_SESSION["id"]=$uid;
	$_SESSION["firstname"] = $row['firstname'];
	$usertype=$row['usertype'];

			if(isset($_POST['remember']))
			{
				setcookie("user",$us,time() + (86400 * 30), "/");
				setcookie("pass",$ps,time() + (86400 * 30), "/");

			}
			if($usertype=="admin")
			{
				header("location:dashboard.php");
				exit();
			}
			elseif($usertype=="artist")
			{
				header("location:../artist panel/dashboard.php");
				exit();
			}
			elseif($usertype=="customer")
			{
				header("location:../user panel/dashboard.php");
				exit();
			}
				
}
else
{
	echo "Username Or Password Wrong!";
	header("location:login.php?msg:wrong email or password");
	exit();
}
?>

