<?php
require "dbconnect.php";
session_start();
$id = $_SESSION['id'];

if($_FILES["fileToUpload"]["name"]=="")
         {
           $sc_id=$_POST["sc_id"];
		$sc_name=$_POST["sc_name"];
		$dou=date("Y-m-d");
		$qry="SELECT * FROM service_category_tbl WHERE sc_id=$sc_id";
		$rs=mysqli_query($conn,$qry);
		$row=mysqli_fetch_assoc($rs);
		$qry1="UPDATE service_category_tbl SET sc_name='".$sc_name."',date_of_update='".$dou."' WHERE sc_id=$sc_id";
		$rs1=mysqli_query($conn,$qry1);
		if($rs1)
		{
		echo "Updated";
		header("location:viewcategory.php?msg:update successfully");
		exit();
		}
		else
		{
		echo "Error";
		header("location:viewcategory.php?msg:update error");
		exit();
		}

   	}
    else
    {
       require "finalupload.php";	
         $sc_id=$_POST["sc_id"];
		$sc_name=$_POST["sc_name"];
$dou=date("Y-m-d");
$qry="SELECT * FROM service_category_tbl WHERE sc_id=$sc_id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$qry1="UPDATE service_category_tbl SET sc_name='".$sc_name."',profile_pic='".$target_file."',date_of_update='".$dou."' WHERE sc_id=$sc_id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewcategory.php?msg:update successfully");
}
else
{
	echo "Error";
	header("location:viewcategory.php?msg:update error");
	exit();
}

}
?>