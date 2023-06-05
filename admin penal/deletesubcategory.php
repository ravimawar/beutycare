<?php
require "dbconnect.php";
$id=$_GET['id'];
$qry="SELECT * FROM sub_category_tbl WHERE sub_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE sub_category_tbl SET isactive=2 WHERE sub_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewsubcategory.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewsubcategory.php?msg:delete error");

}
?>