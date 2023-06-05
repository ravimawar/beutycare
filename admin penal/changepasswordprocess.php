<?php
session_start();
require 'dbconnect.php';

$email=$_GET['email'];
$oldpass=$_GET['oldpass'];
$newpass=$_GET['newpass'];
$newcpass=$_GET['newcpass'];
if($newpass!=$newcpass)
{
	echo "<script>alert('password not match.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

		//	header("location:changepassword.php?msg=PASSWORD IS INCORRECT!");
				exit();
}

$qry="SELECT *FROM reg_tbl WHERE email='".$email."'";
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$qry1="SELECT *FROM reg_tbl WHERE  password='".$oldpass."' AND email='".$email."'";
	$rs1=mysqli_query($conn,$qry1);
		if(mysqli_num_rows($rs1)>0)
		{
			$qry2="UPDATE reg_tbl SET password='".$newpass."' WHERE email='".$email."'";
			$rs2=mysqli_query($conn,$qry2);
			if($rs2)
			{
				echo "<script>alert('password change successfully.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

				//header("location:changepassword.php?msg=PASSWORD CHANGED SUCCESSFULLY!");
				exit();
			}
			else
			{
				echo "<script>alert('password not change.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

				//header("location:changepassword.php?msg=PASSWORD NOT CHANGED SUCCESSFULLY!");
				exit();
			}

		}
		else
		{
			echo "<script>alert('wrong password.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

		//	header("location:changepassword.php?msg=PASSWORD IS INCORRECT!");
				exit();
		}
}
else
{
	echo "<script>alert('email address is incorrect.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

//	header("location:changepassword.php?msg=EMAIL ADDRESS IS INCORRECT!");
				exit();
}
?>