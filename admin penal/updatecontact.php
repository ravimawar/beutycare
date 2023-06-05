<?php
require "dbconnect.php";
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$email=$_GET['txt_email'];
$subject=$_GET['txt_sub'];
$message=$_GET['message'];
$dou=date("Y-m-d");
$qry="SELECT * FROM contact_tbl WHERE cn_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE contact_tbl SET name='".$fn."',email='".$email."',subject='".$subject."',message='".$message."',dou='".$dou."' WHERE cn_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewcontact.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewcontact.php?msg:update error");
	
}
?>