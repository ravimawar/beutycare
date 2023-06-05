<?php 
require 'dbconnect.php';
session_start();
//var_dump($_SESSION);die;
$id=$_SESSION['artid'];
$uid=$_SESSION['id'];
//echo $uid;die;
$aemail=$_SESSION['email'];
$cemail=$_SESSION['email'];
$email=$cemail;
//echo $uid;
//var_dump($_SESSION);
//$_SESSION['userid']=$uid;
$tid=$_SESSION['tid'];
//$uid=$_SESSION['id'];
//echo $uid;
		$qry="SELECT * FROM cart_tbl where id=$uid";
//		echo $qry;
	
		$rs=mysqli_query($conn,$qry);

$qry1="SELECT * FROM order_tbl ORDER BY order_id DESC LIMIT 1";
//echo $qry1;
$rs1=mysqli_query($conn,$qry1);
if(mysqli_num_rows($rs1)>0)
{
	$row1=mysqli_fetch_assoc($rs1);
	$orderuser=$row1['orderuserid']+1;
}
else
{
	$orderuser=1;
}

if(mysqli_num_rows($rs)>0)
{
	while($row=mysqli_fetch_assoc($rs))
	{
		$sub_id=$row['sub_id'];
		$u_id=$row['id'];
		$cart_id=$row['cart_id'];
		$_SESSION['cart_id']=$cart_id;
		$price=$row['price'];
		//$qty=$row['qty'];
		$isactive=1;
		$dt=date("Y-m-d");

		
		$qry5="SELECT * FROM reg_tbl where id=$uid";
		//echo $qry5;die;
		$rs5=mysqli_query($conn,$qry5);
		$row5 = mysqli_fetch_assoc($rs5);
		
		
		$qry1="INSERT INTO order_tbl(cart_id,sub_id,price,user_id,artist_id,t_id,isactive,doi,orderuserid) values( '".$cart_id."','".$sub_id."','".$price."','".$u_id."','".$id."','".$tid."',$isactive,'".$dt."',$orderuser)";
//		echo $qry1;
		$rs1=mysqli_query($conn,$qry1);
		//echo $rs1;die;
//$row1 = mysqli_fetch_assoc($rs1);
		$order_id=$row1['order_id'];
		$_SESSION['order_id']=$order_id;
		//echo $order_id;die;

 $qry4="UPDATE time_sloat SET status='booking' WHERE status='pending' AND t_id=".$tid."";
   $rs4 = mysqli_query($conn,$qry4);
// echo $qry4;
// die;
		//$qry3= "DELETE FROM cart_tbl WHERE cart_id=$cart_id";
		//echo $qry3;
 		//$rs2=mysqli_query($conn,$qry3);
	}
}

if($rs1)
{

	    echo "<script>alert('order conform !..')</script>";
	   echo "<script>window.location='index.php'</script>";


// }

// require 'PHPMailer/class.phpmailer.php';
	// require 'PHPMailer/class.smtp.php';


// if(!isset($_GET['btn_sb']))
// {
// 	echo "Direct URL Called";
// 	exit();
// }
	//amishaprajapati29@gmail.com
	//$msg=$_GET['txt_msg'];
	//$mail->AddEmbeddedImage('assets/new image/2.png');
	

// 	$sub="Order Confiorm";
// 	$mail = new PHPMailer;
	
	 
// 	//$mail->setHtmlBody($homepage);
// 	$body = '<h1>Your ORDER Confiorm !! </h1><br>
	

// 	<h4> Thanks  You for your Order  !!...............</h4>
// 	';
// 	//$homepage = str_replace("###Customer_Name###",$row5['firstname'],$body); 
// 	$mail->isSMTP();                                   // Set mailer to use SMTP
// 	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
// 	$mail->SMTPAuth = true;                            // Enable SMTP authentication
// 	$mail->Username = 't20211998@gmail.com';          // SMTP username
// 	$mail->Password = 'Test@2021'; // SMTP password
// 	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
// 	$mail->Port = 587;                                 // TCP port to connect to

// 	$mail->setFrom('t20211998@gmail.com
// ', 'shruti beauty care');
// 	$mail->addReplyTo('t20211998@gmail.com
// ', 'shruti beauty care');
// 	$mail->addAddress($email);   // Add a recipient
// 	//$mail->addCC('cc@example.com');
// 	//$mail->addBCC('bcc@example.com');
// 	$mail->isHTML(true);  // Set email format to HTML

// 	$bodyContent = $body;
	
// 	$mail->Subject = $sub;
// 	$mail->Body    = $bodyContent;

// $mail->SMTPOptions = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//     )
// );
// 	if(!$mail->send()) {
// 	    echo 'Message could not be sent.';
// 	    echo 'Mailer Error: ' . $mail->ErrorInfo;
// 	} else {

// 	    echo "<script>alert('Order Confirm.')</script>";
// 	    echo "<script>window.location='Confiormorder.php'</script>";
// 	}


			
	//header("location:logincustomer.php?msg=insert success");
	//exit();

}


else
{
	echo "Insert Error!";
	header("location:order.php?msg:error.");
}


?>