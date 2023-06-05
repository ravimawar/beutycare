<?php
session_start();
require 'dbconnect.php';
if(!isset($_GET['btn_sb']))
{
	header("location:addquestion.php");
}
$questionname=$_GET['question_name'];
$isactive = 1;
$dt = date("Y-m-d");
$qry="INSERT INTO security_question_tbl(sq,isactive,date_of_insert) VALUES('".$questionname."',$isactive,'".$dt."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Sucess";
	header("location:viewquestion.php?msg:add successfully");
}
else
{
	echo "Error";
	header("location:viewquestion.php?msg:add error");

}
?>