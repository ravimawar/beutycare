<?php
require 'dbconnect.php';
$sc_id=$_GET['sc_id'];
$qry="SELECT * FROM service_category_tbl WHERE sc_id=$sc_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE service_category_tbl SET isactive=1 WHERE sc_id=$sc_id";
}
else
{
	$qry1="UPDATE service_category_tbl SET isactive=0 WHERE sc_id=$sc_id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewcategory.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewcategory.php?msg:block error");

}
?>