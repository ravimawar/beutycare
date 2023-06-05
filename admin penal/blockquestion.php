<?php
require 'dbconnect.php';
$sq_id=$_GET['sq_id'];
$qry="SELECT * FROM security_question_tbl WHERE sq_id=$sq_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE security_question_tbl SET isactive=1 WHERE sq_id=$sq_id";
}
else
{
	$qry1="UPDATE security_question_tbl SET isactive=0 WHERE sq_id=$sq_id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewquestion.php?msg:success");
	exit();
}
else
{
	echo "Error";
	header("location:viewquestion.php?msg:block error");

}
?>