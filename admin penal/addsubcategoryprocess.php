<?php
session_start();
require 'dbconnect.php';
require 'finalupload.php';
if(!isset($_GET['btn_sb']))
{
	header("location:addsubcategory.php");
}
$id = $_SESSION['id'];
$sub_id=$_SESSION['sub_id'];
if($_FILES["fileToUpload"]["name"]=="")
         {
           echo "No File is Selected.";
           exit();
        }
        else
        {
          require "finalupload.php";
        }
$sc_id=$_POST['sc_id'];
$subcategoryname=$_POST['sub_category_name'];
$price=$_POST['txt_price'];
$isactive = 1;
$dt = date("Y-m-d");
$qry="INSERT INTO sub_category_tbl(sc_id,subcategory_name,profile_pic,price,isactive,date_of_insert) VALUES('".$sc_id."','".$subcategoryname."','".$target_file."','".$price."',".$isactive.",".$dt.")";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Sucess";
  //exit();
	header("location:viewsubcategory.php?msg:Add Successfully");
}
else
{
	echo "Error";
	header("location:viewsubcategory.php?msg:add error");

}
?>