<?php
require "dbconnect.php";
session_start();
$id = $_SESSION['id'];
if($_FILES["fileToUpload"]["name"]=="")
         {
           echo "No File is Selected.";
           $qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$id=$_POST["id"];
$fn=$_POST["txt_fn"];
$ln=$_POST["txt_ln"];
$mno=$_POST["txt_mobile"];
$skill=$_POST["txt_skill"];
$dis=$_POST["txt_dis"];
$gen=$_POST["gender"];
$area=$_POST["area"];
$address=$_POST["address"];
$dou=date("Y-m-d");
$qry1="UPDATE reg_tbl SET firstname='".$fn."',lastname='".$ln."',mobileno='".$mno."',gender='".$gen."',address='".$address."',area='".$area."',skill='".$skill."',discription='".$dis."',date_of_update='".$dou."' WHERE id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewprofile.php?msg:updated");
	exit();
}
else
{
	echo "Error";
  header("location:updateprofile.php?msg:error");
  exit();
}

        }
        else
        {
          require "finalupload.php";
          $qry="SELECT * FROM reg_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$id=$_POST["id"];
$fn=$_POST["txt_fn"];
$ln=$_POST["txt_ln"];
$mno=$_POST["txt_mobile"];
$skill=$_POST["txt_skill"];
$dis=$_POST["txt_dis"];
$gen=$_POST["gender"];
$address=$_POST["address"];
$dou=date("Y-m-d");
$qry1="UPDATE reg_tbl SET firstname='".$fn."',lastname='".$ln."',mobileno='".$mno."',gender='".$gen."',address='".$address."',profile_pic='".$target_file."',skill='".$skill."',discription='".$dis."',date_of_update='".$dou."' WHERE id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewprofile.php?msg:updated");
	exit();
}
else
{
	echo "Error";
}

        }

?>