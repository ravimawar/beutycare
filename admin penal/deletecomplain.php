<?php
require "dbconnect.php";
$id=$_GET['id'];
$qry="SELECT * FROM complaint_tbl WHERE c_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE complaint_tbl SET isactive=2 WHERE c_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewcomplaint.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewcomplaint.php?msg:delete error");

}
?>