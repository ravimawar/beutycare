<?php
require "dbconnect.php";
$area_id=$_GET["area_id"];
$area_name=$_GET["area_name"];
$dou=date("Y-m-d");
$qry="SELECT * FROM area_tbl WHERE area_id=$area_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE area_tbl SET area_name='".$area_name."',date_of_update='".$dou."' WHERE area_id=$area_id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewarea.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewarea.php?msg:update error");
	
}

?>