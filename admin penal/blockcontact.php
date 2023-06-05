<?php
require 'dbconnect.php';
$id=$_GET['id'];
$qry="SELECT * FROM contact_tbl WHERE cn_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE contact_tbl SET isactive=1 WHERE cn_id=$id";
}
else
{
	$qry1="UPDATE contact_tbl SET isactive=0 WHERE cn_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewcontact.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewcontact.php?msg:block error");

}

?>