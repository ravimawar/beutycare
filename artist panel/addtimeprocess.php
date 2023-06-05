<?php
require 'dbconnect.php';
session_start();
$id = $_SESSION["id"];
$time=$_REQUEST['ad_t'];
$status=$_REQUEST['status'];
$isactive='1';
$qry="INSERT INTO time_sloat(id,time,status,isactive) VALUES('".$id."','".$time."','".$status."',$isactive) ";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "success";
	header("location:viewtime.php?msg:add successfully");
	exit();
}
else
{
	echo "error!";
	header("location:addtime.php?msg:add error");
		
}
?>
