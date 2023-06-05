<?php
require 'dbconnect.php';
//var_dump($_GET);
$area_id=$_GET['area_id'];
$qry="SELECT * FROM area_tbl WHERE area_id=$area_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE area_tbl SET isactive=1 WHERE area_id=$area_id";
	}
else
{
	$qry1="UPDATE area_tbl SET isactive=0 WHERE area_id=$area_id";
	}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewarea.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewarea.php?msg:update error");
	
}
?>