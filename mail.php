<?php


require_once('PHPmailer/PHPMailerAutoload.php');
echo $_POST['email'];
$to=$_POST['email'];


$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth='true';
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port='465';
$mail->isHTML();
$mail->Username="dbombomb074@gmail.com";
$mail->Password='qwertypoiu';
$mail->SetFrom('no-reply@digibomb.com');
$mail->FromName='digibomb';
$mail->Subject="Thanks for Subscription";
$mail->Body="Welcome to digibomb digital marketing agency.";
$mail->AddAddress($to);


$mail->Send();

header('Location: thanks.php');

?>	
