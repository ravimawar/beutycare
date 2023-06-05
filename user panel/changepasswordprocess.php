<?php
session_start();
//var_dump($_GET);
require 'dbconnect.php';

$email=$_GET['email'];
$oldpass=$_GET['oldpass'];
$newpass=$_GET['newpass'];
$newcpass=$_GET['newcpass'];
if($newpass!=$newcpass)
{
	header("location:changepassword.php?msg=wrong password.");
	exit();
}

$qry="SELECT *FROM reg_tbl WHERE email='".$email."'";
//echo "<br>".$qry;
//exit();
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$qry1="SELECT *FROM reg_tbl WHERE  password='".$oldpass."' AND email='".$email."'";
	$rs1=mysqli_query($conn,$qry1);
//	echo "<br>".$qry1;
		if(mysqli_num_rows($rs1)>0)
		{
			$qry2="UPDATE reg_tbl SET password='".$newpass."' WHERE email='".$email."'";
			$rs2=mysqli_query($conn,$qry2);
			//echo $qry2;

			if($rs2)
			{
				echo "<script>alert('password change successfully.')</script>";
	    	echo "<script>window.location='index.php'</script>";

				//header("location:changepassword.php?msg=PASSWORD CHANGED SUCCESSFULLY!");
				exit();
			}
			else
			{
				echo "<script>alert('password is wrong.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

				//header("location:changepassword.php?msg=PASSWORD NOT CHANGED SUCCESSFULLY!");
				exit();
			}

		}
		else
		{
			echo "<script>alert('password is wrong.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

			//header("location:changepassword.php?msg=PASSWORD IS INCORRECT!");
				exit();
		}
}
else
{
	echo "<script>alert('wrong email.')</script>";
	    	echo "<script>window.location='changepassword.php'</script>";

			//header("location:changepassword.php?msg=PASSWORD IS INCORRECT!");
				exit();
}
?>