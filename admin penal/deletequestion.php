<?php
require "dbconnect.php";
$id=$_GET['sq_id'];
$qry="SELECT * FROM security_question_tbl WHERE sq_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE security_question_tbl SET isactive=2 WHERE sq_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewquestion.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewquestion.php?msg:delete error");

}
?>