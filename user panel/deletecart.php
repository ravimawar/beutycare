<?php
require "dbconnect.php";
$id=$_SESSION['id'];
$qry="SELECT * FROM cart_tbl";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$id=$_GET['id'];
$qry1="UPDATE cart_tbl SET isactive=2 WHERE cart_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewallcart.php?msg:delete successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewallcart.php?msg:delete error");
	exit();
}
?>