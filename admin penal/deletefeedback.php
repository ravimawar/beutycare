<?php
require "dbconnect.php";
$id=$_GET['id'];
$qry="SELECT * FROM feedback_tbl WHERE f_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE feedback_tbl SET isactive=2 WHERE f_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewfeedback.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewfeedback.php?msg:delete error");

}
?>