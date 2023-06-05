<?php
require 'dbconnect.php';
$order_id=$_GET['order_id'];
$qry="SELECT * FROM order_tbl WHERE order_id=$order_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE order_tbl SET isactive=1 WHERE order_id=$order_id";
	}
else
{
	$qry1="UPDATE order_tbl SET isactive=0 WHERE order_id=$order_id";
	}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:vieworder.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:vieworder.php?msg:update error");
	
}
?>