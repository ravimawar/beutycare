<?php
require 'dbconnect.php';
$id=$_GET['tid'];
$_SESSION["tid"]=$id;
$qry="SELECT * FROM time_sloat WHERE t_id=$id";
//echo $qry;
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$status=$row['status'];
$isactive=$row['isactive'];
$s="boking";
$t="pending";

if( $isactive==0)
{
	$qry1="UPDATE time_sloat SET isactive=1, status='".$s."' WHERE t_id=$id";
	//echo $qry1;

	$rs1=mysqli_query($conn,$qry1);
	header("location:viewartist.php");
	//exit();
	
	

}

?>