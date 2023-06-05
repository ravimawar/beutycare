<?php
session_start();
require 'dbconnect.php';
if(!isset($_GET['btn_sb']))
{
	header("location:addarea.php");
}
$areaname=$_GET['area_name'];
$isactive = 1;
$dt = date("Y-m-d");
$qry="INSERT INTO area_tbl(area_name,isactive,date_of_insert) VALUES('".$areaname."',$isactive,'".$dt."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Sucess";
	header("location:viewarea.php?msg:add successfully");
}
else
{
	echo "Error";
	header("location:viewarea.php?msg:add error");

}
?>