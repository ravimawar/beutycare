<?php
session_start();
require 'dbconnect.php';
$uid=$_SESSION["id"];
$sid = $_GET['sid'];
$qry1="SELECT * FROM sub_category_tbl where sub_id=$sid";
$rs1=mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($rs1);
$subid=$row1['sub_id'];
$price=$row1['price'];
$isactive=1;
$subname=$row1['subcategory_name'];
$dt=date("y-m-d");
$dt1=date("y-m-d");
      $qry1="INSERT INTO cart_tbl(id,sub_id,price,subcategory_name,isactive,date_of_insert,date_of_update)VALUES('".$uid."','".$subid."','".$price."','".$subname."',$isactive,'".$dt."','".$dt1."')";
    //  echo $qry1;
      $rs1=mysqli_query($conn,$qry1);
      if($rs1)
      {
      	echo "insert success";
      	 header("location:viewallcart.php");
      	 exit();
      }
      else
      {
      	echo "error";
             header("location:addcart.php?msg:error");
             exit();
      }

 ?>