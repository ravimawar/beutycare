<?php
require 'dbconnect.php';

session_start();

//var_dump($_GET);
if(!isset($_GET['btn_sb']))
{
	header("location:registrationartist.php");
	exit();
}

$fn=$_GET['txt_fn'];
$ln=$_GET['txt_ln'];
$email=$_GET['txt_email'];
$pass=$_GET['txt_pass'];
$cpass=$_GET['txt_cpass'];
$gen=$_GET['gen'];
$mobile=$_GET['txt_mobile'];
$address=$_GET['txt_area'];
$skill=$_GET['txt_skill'];
$dis=$_GET['txt_dis'];
$usertype="artist";
$sq1=$_GET['sq1'];
$sq2=$_GET['sq2'];
$sq3=$_GET['sq3'];
$sa1=$_GET['sa1'];
$sa2=$_GET['sa2'];
$sa3=$_GET['sa3'];

//echo $usertype;
//exit();
//$usertype=$_GET['user'];
//echo $usertype;
//exit();
$isactive = 1;
//$_SESSION["id"]=$id;
//echo $id;
//exit();
$dt = date("Y-m-d");
//$usertype=2;
//$profile="../profile/avtar.jpg";
//echo $fn;
//$i="amisha";
//$_SESSION["password"]=$pass;

//echo $fn.$ln.$email.$pass.$gen.$mobile.$address.$usertype;
$qry1 = "SELECT * FROM reg_tbl WHERE email='".$email."'";
//echo $qry1;
$rs1 = mysqli_query($conn,$qry1);
if(mysqli_num_rows($rs1)<0)
{
	header("location:registartionartist.php");
	exit();
}


$qry = "INSERT INTO reg_tbl(firstname,lastname,email,mobileno,gender,password,address,skill,discription,usertype,security_question1,security_answer1,security_question2,security_answer2,security_question3,security_answer3,isactive,doi) VALUES('".$fn."','".$ln."','".$email."','".$mobile."','".$gen."','".$pass."','".$address."','".$skill."','".$dis."','".$usertype."','".$sq1."','".$sa1."','".$sq2."','".$sa2."','".$sq3."','".$sa3."',$isactive,'".$dt."')";
//echo $qry;
//exit();
$rs = mysqli_query($conn,$qry);
//echo $rs;
//exit();
//$row=mysqli_fetch_assoc($rs);
//echo $row;
//exit();
if($rs)
{
require 'PHPMailer/class.phpmailer.php';
	require 'PHPMailer/class.smtp.php';


if(!isset($_GET['btn_sb']))
{
	echo "Direct URL Called";
	exit();
}
	
	//$msg=$_GET['txt_msg'];
	//$mail->AddEmbeddedImage('assets/new image/2.png');
	

	$sub="Contact Form Submitted From Website";
	$mail = new PHPMailer;
	
	$body = '<h1>registration Success go to the Login And use Our Services!! </h1><br>
	<h4> Thanks  You !!...............</h4>';

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 't20211998@gmail.com';          // SMTP username
	$mail->Password = 'Test@2021'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('t20211998@gmail.com
', 'shruti beauty care');
	$mail->addReplyTo('t20211998@gmail.com
', 'shruti beauty care');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {

	    echo "<script>alert('Registration Successfull.')</script>";
	    echo "<script>window.location='loginartist.php'</script>";
	}


			
	//header("location:logincustomer.php?msg=insert success");
	//exit();

}


else
{
	echo "Insert Error!";
	header("location:registrationartist.php?msg:insert error!");
}
?>

 