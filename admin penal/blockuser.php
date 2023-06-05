<?php
require 'dbconnect.php';
$id=$_GET['id'];
$qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE reg_tbl SET isactive=1 WHERE id=$id";
}
else
{
	$qry1="UPDATE reg_tbl SET isactive=0 WHERE id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewalluser.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewalluser.php?msg:block error");

}
?>