<?php
require "dbconnect.php";
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$ln=$_GET['txt_ln'];
$mno=$_GET['txt_mobile'];
$gen=$_GET['gender'];
$address=$_GET['address'];
$dou=date("Y-m-d");
$qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE reg_tbl SET firstname='".$fn."',lastname='".$ln."',mobileno='".$mno."',gender='".$gen."',address='".$address."',date_of_update='".$dou."' WHERE id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewalluser.php?msg:updete successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewalluser.php?msg:update error");
	exit();

}

?>