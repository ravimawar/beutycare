<?php
require "dbconnect.php";
require 'finalupload.php';
$sc_name=$_POST["sc_name"];
$id = $_POST['id'];
$price=$_POST['txt_price'];
$sc_id = $_POST['sc_id'];
$subcategory_name=$_POST["subcategory_name"];
if($_FILES["fileToUpload"]["name"]=="")
         {
           $dou=date("Y-m-d");
$qry="UPDATE service_category_tbl SET sc_name='".$sc_name."' WHERE sc_id=$sc_id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "update sc table success";
}
$qry1="UPDATE sub_category_tbl SET subcategory_name='".$subcategory_name."',price='".$price."',date_of_update='".$dou."' WHERE sub_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewsubcategory.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
		header("location:viewsubcategory.php?msg:update error");
		exit();

}
}

        else
        {
          require "finalupload.php";
          $sc_name=$_POST["sc_name"];
$id = $_POST['id'];
$price=$_POST['txt_price'];
$sc_id = $_POST['sc_id'];
$subcategory_name=$_POST["subcategory_name"];
if($_FILES["fileToUpload"]["name"]=="")
         {
           $dou=date("Y-m-d");
$qry="UPDATE service_category_tbl SET sc_name='".$sc_name."' WHERE sc_id=$sc_id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "update sc table success";
}
$qry1="UPDATE sub_category_tbl SET subcategory_name='".$subcategory_name."',profile_pic='".$target_file."',price='".$price."',date_of_update='".$dou."' WHERE sub_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Updated";
	header("location:viewsubcategory.php?msg:update successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewsubcategory.php?msg:update error");

exit();
}
}

        }

?>