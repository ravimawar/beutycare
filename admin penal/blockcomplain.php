<?php
require 'dbconnect.php';
$id=$_GET['id'];
$qry="SELECT * FROM complaint_tbl WHERE c_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE complaint_tbl SET isactive=1 WHERE c_id=$id";
}
else
{
	$qry1="UPDATE complaint_tbl SET isactive=0 WHERE c_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewcomplaint.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewcomplaint.php?msg:block error");

}

?>