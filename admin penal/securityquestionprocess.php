<?php
session_start();
require 'dbconnect.php';
$mail = $_POST['mail'];
$as1=$_POST['txt_answer1'];
$as2=$_POST['txt_answer2'];
$as3=$_POST['txt_answer3'];
$qry="SELECT * FROM reg_tbl WHERE security_answer1='".$as1."' AND security_answer2='".$as2."' AND security_answer3='".$as3."' AND email='".$mail."'";
$rs=mysqli_query($conn,$qry);
$_SESSION['user1']=$mail;
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	header("location:changepassword2.php?msg:success");
	exit();
}
else
{
	header("location:login.php?msg=answer is wrong.");
	exit();
}
?>