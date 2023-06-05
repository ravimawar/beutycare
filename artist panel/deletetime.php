<?php
require "dbconnect.php";
$id=$_GET['t_id'];
$qry="SELECT * FROM time_sloat WHERE t_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
$qry1="UPDATE time_sloat SET isactive=2 WHERE t_id=$id";
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "Deleted";
	header("location:viewtime.php?msg:delete successfully");
}
else
{
	echo "Error";
	header("location:viewtime.php?msg:delete error");

}
?>