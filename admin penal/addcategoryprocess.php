<?php
session_start();
require 'dbconnect.php';
require 'finalupload.php';
$id = $_SESSION['id'];
if($_FILES["fileToUpload"]["name"]=="")
         {
           echo "No File is Selected.";
           exit();
        }
        else
        {
          require "finalupload.php";
        }
if(!isset($_GET['btn_sb']))
{
	header("location:addcategory.php");
}
$categoryname=$_POST['category_name'];
$isactive = 1;
$dt = date("Y-m-d");
$qry="INSERT INTO service_category_tbl(sc_name,profile_pic,isactive,date_of_insert) VALUES('".$categoryname."','".$target_file."',$isactive,'".$dt."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Sucess";
	header("location:viewcategory.php?msg:add successfully");
}
else
{
	echo "Error";
	header("location:viewcategory.php?msg:add error");

}
?>