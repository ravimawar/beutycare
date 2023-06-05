<?php
require "dbconnect.php";
$id=$_GET['area_id'];
$qry="SELECT * FROM area_tbl WHERE area_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE area_tbl SET isactive=2 WHERE area_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewarea.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewarea.php?msg:delete error");

}
?>