<?php
session_start();
require 'dbconnect.php';
//var_dump($_POST);
if(!isset($_POST["btn_sb"]))
{
	header("location:loginartist.php");
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
	$_SESSION["id"]=$a_id;
	$_SESSION["firstname"] = $row['firstname'];
	$usertype=$row['usertype'];
			if(isset($_POST['remember']))
			{
				setcookie("user",$us,time() + (86400 * 30), "/");
				setcookie("pass",$ps,time() + (86400 * 30), "/");

			}
			if($usertype=="artist")
			{
				echo "<script>alert('login successfull...thanks for login.')</script>";
	    	echo "<script>window.location='../artist panel/dashboard.php'</script>";

				//header("location:../artist panel/dashboard.php");
				exit();
			}
		
			else
			{
				echo "<script>alert('wrong email or password.')</script>";
	    	echo "<script>window.location='loginartist.php'</script>";

				//header("location:loginartist.php");
				exit();
			}
			/*if($usertype=="c")
			{
				header("location:index-2.html");
				
				exit();
			}*/
				
}
else
{
	echo "<script>alert('wrong email or password.')</script>";
	    	echo "<script>window.location='loginartist.php'</script>";

				//header("location:loginartist.php");
				exit();
}
?>