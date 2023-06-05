<?php
session_start();
//var_dump($_GET);
require 'dbconnect.php';
if(!isset($_POST['btn_sb']))
{
 	header("location:changepassword2.php");
}
$email=$_SESSION['user1'];
$newpass=$_GET['newpass'];
$newcpass=$_GET['newcpass'];
if($newpass!=$newcpass)
{
	header("location:changepassword2.php?msg=wrong password.");
	exit();
}

$qry="SELECT *FROM reg_tbl WHERE email='".$email."'";
//echo "<br>".$qry;
//exit();
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$qry1="SELECT *FROM reg_tbl WHERE email='".$email."'";
	$rs1=mysqli_query($conn,$qry1);
	//echo "<br>".$qry1;
		if(mysqli_num_rows($rs1)>0)
		{
			$qry2="UPDATE reg_tbl SET password='".$newpass."' WHERE email='".$email."'";
			$rs2=mysqli_query($conn,$qry2);
			//echo $qry2;

			if($rs2)
			{
				// echo "<script>alert('password is correct.')</script>";
	   //  	echo "<script>window.location='index.php'</script>";

				header("location:logincustomer.php?msg:password change successfully.");
				exit();
			}
			else
			{
				// echo "<script>alert('wrong email.')</script>";
	   //  	echo "<script>window.location='index.php'</script>";

				header("location:changepassword2.php?msg:password not change.");
				exit();
			}

		}
		else
		{
			// echo "<script>alert('wrong email.')</script>";
	  //   	echo "<script>window.location='index.php'</script>";

			header("location:changepassword2.php?msg:incorrect password.");
				exit();
		}
}
else
{
	// echo "<script>alert('wrong email.')</script>";
	//     	echo "<script>window.location='index.php'</script>";
	
	header("location:changepassword2.php?msg:incorrect email address.");
				exit();
}
?>