<?php
require "dbconnect.php";
$id=$_GET['id'];
$qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE reg_tbl SET isactive=2 WHERE id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewallartist.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewallartist.php?msg:delete error");

}
?>