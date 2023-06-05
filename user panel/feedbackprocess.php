<?php
require 'dbconnect.php';

session_start();

//var_dump($_GET);
if(!isset($_GET['btn_sb']))
{
	header("location:feedback.php");
	exit();
}
$id=$_SESSION['id'];
$fn=$_GET['txt_fn'];
$email=$_GET['txt_email'];
$mobile=$_GET['txt_mobile'];
$message=$_GET['txt_msg'];
$isactive = 1;
$user=$_SESSION["user"];

$dt = date("Y-m-d");
if($user==$email)
{
$qry = "INSERT INTO feedback_tbl(id,firstname,email,mobileno,message,isactive,date_of_insert) VALUES('".$id."','".$fn."','".$email."','".$mobile."','".$message."',$isactive,'".$dt."')";
//echo $qry;
$rs = mysqli_query($conn,$qry);
//echo $rs;
if($rs)
{echo "<script>alert('message sent successfully.')</script>";
	    	echo "<script>window.location='feedback.php'</script>";
	}
else
{
	echo "<script>alert('message not sent.')</script>";
	    	echo "<script>window.location='feedback.php'</script>";
	exit();
}
}
else
{
	echo "<script>alert('message not sent.')</script>";
	    	echo "<script>window.location='feedback.php'</script>";
}
?>