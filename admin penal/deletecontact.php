<?php
require "dbconnect.php";
$id=$_GET['id'];
$qry="SELECT * FROM contact_tbl WHERE cn_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE contact_tbl SET isactive=2 WHERE cn_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewcontact.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewcontact.php?msg:delete error");

}
?>