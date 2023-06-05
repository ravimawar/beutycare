<?php
require "dbconnect.php";
$t_id=$_GET["t_id"];
$time=$_GET["txt_time"];
$select=$_GET["txt_select"];
$dou=date("Y-m-d");
$qry="SELECT * FROM time_sloat WHERE t_id=$t_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE time_sloat SET time='".$time."',status='".$select."' WHERE t_id=$t_id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewtime.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewtime.php?msg:update error");
	exit();

}
?>