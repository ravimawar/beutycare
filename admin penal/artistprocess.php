<?php
session_start();
require 'dbconnect.php';
if(!isset($_GET['btn_sb']))
{
	header("location:registration.php");
	exit();
}
$fn=$_GET['txt_fn'];
$ln=$_GET['txt_ln'];
$area=$_GET['area_id'];

$email=$_GET['txt_email'];
$pass=$_GET['txt_pass'];
$cpass=$_GET['txt_cpass'];
$gen=$_GET['gen'];
$mobile=$_GET['txt_mobile'];
$skill=$_GET['txt_skill'];
$dis=$_GET['txt_dis'];
$address=$_GET['txt_area'];
$usertype=$_SESSION["usertype"];
$sq1=$_GET['sq1'];
$sq2=$_GET['sq2'];
$sq3=$_GET['sq4'];
$sa1=$_GET['sa1'];
$sa2=$_GET['sa2'];
$sa3=$_GET['sa4'];
$isactive = 1;
$dt = date("Y-m-d");
$_SESSION["password"]=$pass;
$_SESSION["usertype"]=$usertype;
$qry2 = "SELECT * FROM area_tbl WHERE area_id=$area";

$rs2 = mysqli_query($conn,$qry2);
$row2=mysqli_fetch_assoc($rs2);
$area_name=$row2['area_name'];

if($pass!=$cpass)
{
	header("location:registration.php");
	exit();

}
$qry1 = "SELECT * FROM reg_tbl WHERE email='".$email."'";
$rs1 = mysqli_query($conn,$qry1);
if(mysqli_num_rows($rs1)<0)
{
	header("location:addartist.php");
	exit();
}
$qry = "INSERT INTO reg_tbl(firstname,lastname,email,mobileno,gender,password,usertype,security_question1,security_answer1,security_question2,security_answer2,security_question3,security_answer3,area,address,skill,discription,isactive,doi) VALUES('".$fn."','".$ln."','".$email."','".$mobile."','".$gen."','".$pass."','".$usertype."','".$sq1."','".$sa1."','".$sq2."','".$sa2."','".$sq3."','".$sa3."','".$area_name."','".$address."','".$skill."','".$dis."',$isactive,'".$dt."')";
$rs = mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success!";
	header("location:addartist.php?msg:insert success");
}
else
{
	echo "Insert Error!";
	header("location:addartist.php?msg:insert error");

}
?>