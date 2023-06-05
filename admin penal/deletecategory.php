<?php
require "dbconnect.php";
$id=$_GET['sc_id'];
$qry="SELECT * FROM service_category_tbl WHERE sc_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE service_category_tbl SET isactive=2 WHERE sc_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewcategory.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewcategory.php?msg:delete error");

}
?>