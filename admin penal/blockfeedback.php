<?php
require 'dbconnect.php';
$id=$_GET['id'];
$qry="SELECT * FROM feedback_tbl WHERE f_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE feedback_tbl SET isactive=1 WHERE f_id=$id";
}
else
{
	$qry1="UPDATE feedback_tbl SET isactive=0 WHERE f_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewfeedback.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewfeedback.php?msg:block error");

}

?>