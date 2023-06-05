<?php
session_start();
require 'dbconnect.php';
//var_dump($_POST);
if(!isset($_POST["btn_sb"]))
{
	header("location:logincustomer.php");
	exit();
}
$us=$_POST['txt_un'];
$ps=$_POST['txt_ps'];

$qry="SELECT * FROM reg_tbl  WHERE email='".$us."' AND password='".$ps."' AND isactive=1";

//echo $qry;
//exit();
$rs = mysqli_query($conn,$qry);
//exit();
if(mysqli_num_rows($rs)>0)
{
	$row = mysqli_fetch_assoc($rs);
	$a_id= $row['id'];
	//echo "Found";
	
	$_SESSION["user"]=$us;
	//$_SESSION["email"]=$email;
	$_SESSION["id"]=$a_id;
	$_SESSION["firstname"] = $row['firstname'];
	$usertype=$row['usertype'];
			if(isset($_POST['remember']))
			{
				setcookie("user",$us,time() + (86400 * 30), "/");
				setcookie("pass",$ps,time() + (86400 * 30), "/");

			}
			if($usertype=="admin")
			{
				echo "<script>alert('login successfull...thanks for login.')</script>";
	    	echo "<script>window.location='../admin penal/dashboard.php'</script>";
				//header("location:../admin penal/dashboard.php");
				exit();
			}
			
			/*elseif($usertype=="artist")
			{
				header("location:../artist panel/dashboard.php");
				exit();
			}*/
			if($usertype=="customer")
			{
					
					echo "<script>alert('login successfull...thanks for login.')</script>";
	    	echo "<script>window.location='index.php'</script>";


				//header("location:index.php?msg:login successful");
				
				exit();
			}
			else
			{
				echo "<script>alert('wrong username password.')</script>";
	    	echo "<script>window.location='logincustomer.php'</script>";
	    	exit();
				//header("location:logincustomer.php?msg:login unsuccess");
			}
				
}
else
{
	//echo "Username Or Password Wrong!";
	//header("location:logincustomer.php");
	echo "<script>alert('wrong username password.')</script>";
	    	echo "<script>window.location='logincustomer.php'</script>";
	exit();
}
?>