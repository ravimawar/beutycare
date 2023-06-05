<?php
require "dbconnect.php";
$sq_id=$_GET["sq_id"];
$question_name=$_GET["question_name"];
$dou=date("Y-m-d");
$qry="SELECT * FROM swcurity_quesation_tbl WHERE sq_id=$sq_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE security_question_tbl SET sq='".$question_name."',date_of_update='".$dou."' WHERE sq_id=$sq_id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewquestion.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewquestion.php?msg:update error");

}
?>