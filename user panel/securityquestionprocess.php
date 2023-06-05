<?php
session_start();
require 'dbconnect.php';
$mail = $_POST['mail'];
$as1=$_POST['txt_answer1'];
$as2=$_POST['txt_answer2'];
$as3=$_POST['txt_answer3'];
// var_dump($as3);die;
$qry="SELECT * FROM reg_tbl WHERE security_answer1='".$as1."' AND security_answer2='".$as2."' AND security_answer3='".$as3."' AND email='".$mail."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
$_SESSION['user1']=$mail;
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	echo "<script>alert('answer is got.')</script>";
	    	echo "<script>window.location='changepassword2.php'</script>";
	//header("location:changepassword2.php");
	exit();
}
else
{
		echo "<script>alert('answer is wrong.')</script>";
	    	echo "<script>window.location='loginartist.php'</script>";
	//header("location:loginartist.php?msg=ANSWER IS WRONG");
	exit();
}
?>