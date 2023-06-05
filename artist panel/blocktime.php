<?php
require 'dbconnect.php';
$id=$_GET['t_id'];
$qry="SELECT * FROM time_sloat WHERE t_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['isactive'];
if($status==0)
{
	$qry1="UPDATE time_sloat SET isactive=1 WHERE t_id=$id";
}
else
{
	$qry1="UPDATE time_sloat SET isactive=0 WHERE t_id=$id";
}
$rs1=mysqli_query($conn,$qry1);
if($rs1)
{
	echo "updated";
	header("location:viewtime.php?msg:block successfully");
	exit();
}
else
{
	echo "Error";
	header("location:viewtime.php?msg:block error");
	exit();

}

?>