<?php
require "dbconnect.php";
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$mno=$_GET['txt_mobile'];
$message=$_GET['message'];
$dou=date("Y-m-d");
$qry="SELECT * FROM feedback_tbl WHERE f_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE feedback_tbl SET firstname='".$fn."',mobileno='".$mno."',message='".$message."',date_of_update='".$dou."' WHERE f_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewfeedback.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewfeedback.php?msg:update error");
	
}
?>