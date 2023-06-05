<?php
require "dbconnect.php";
$id=$_GET['order_id'];
$qry="SELECT * FROM order_tbl WHERE order_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE order_tbl SET isactive=2 WHERE order_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:vieworder.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:vieworder.php?msg:delete error");

}
?>