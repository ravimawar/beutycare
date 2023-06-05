<?php
require 'dbconnect.php';
session_start();
if(!isset($_GET['btn_sb']))
{
	header("location:contact_us.php");
	exit();
}
$id=$_SESSION['id'];
$fn=$_GET['txt_fn'];
$email=$_GET['txt_email'];
$sub=$_GET['txt_sub'];
$message=$_GET['txt_msg'];
$isactive = 1;
$user=$_SESSION["user"];
$dt = date("Y-m-d");
if($user==$email)
{
$qry = "INSERT INTO contact_tbl(id,name,email,subject,message,isactive,doi) VALUES('".$id."','".$fn."','".$email."','".$sub."','".$message."',$isactive,'".$dt."')";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	//echo "Insert Success!";
	//header("location:contact-us.php?msg:insert success");
	echo "<script>alert('message sent successfully.')</script>";
	    	echo "<script>window.location='contact-us.php'</script>";

}
else
{
	echo "<script>alert('wrong email.')</script>";
//	header("location:contact-us.php?msg:insert error");
	echo "<script>window.location='contact-us.php'</script>";
	exit();
}
}
else
{
	echo "<script>alert('wrong email.')</script>";
//	header("location:contact-us.php?msg:insert error");
	echo "<script>window.location='contact-us.php'</script>";
	exit();
}
?> 