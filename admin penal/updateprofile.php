<?php
require "dbconnect.php";
require "finalupload.php";
session_start();
//var_dump($_SESSION);
$id = $_SESSION['id'];

//var_dump($_GET);
//echo "<br><br><br>";
//var_dump($_FILES);
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
$gen=$_POST["gender"];
$address=$_POST["address"];
//echo $id;
$dou=date("Y-m-d");

$qry1="UPDATE reg_tbl SET firstname='".$fn."',lastname='".$ln."',mobileno='".$mno."',gender='".$gen."',address='".$address."',date_of_update='".$dou."' WHERE id=$id";
//echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewprofile.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewprofile.php?msg:update error");
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
$gen=$_POST["gender"];
$address=$_POST["address"];
//echo $id;
$dou=date("Y-m-d");

$qry1="UPDATE reg_tbl SET firstname='".$fn."',lastname='".$ln."',mobileno='".$mno."',gender='".$gen."',address='".$address."',profile_pic='".$target_file."',date_of_update='".$dou."' WHERE id=$id";
//echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewprofile.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewprofile.php?msg:update error");
	exit();

}

        }

?>