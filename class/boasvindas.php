<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('America/Sao_Paulo');
include "config/config.php";
$data = date("d/m/Y");
$hora = date('H:i', strtotime('+1 hours'));
$nome = $_SESSION['nome'];
global $pdo;
$array = [];
$sql = $pdo->prepare("SELECT * FROM coderphp_smtp limit 1");
$sql->execute();
if ($sql->rowCount() > 0) {
    $array = $sql->fetchAll();
}

foreach ($array as $coderphp01) {
    $coderphp01['smtp'];
    $coderphp01['email'];
    $coderphp01['senha'];
    $coderphp01['porta'];
}

$email = $_SESSION['email1'];

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP(); // Send using SMTP
    $mail->Host       = $coderphp01['smtp']; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = $coderphp01['email']; // SMTP username
    $mail->Password   = $coderphp01['senha']; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
    $mail->Port       = $coderphp01['porta']; // TCP port to connect to

    // Recipients
    $mail->setFrom($coderphp01['email'], '123Milhas');
    $mail->addAddress($email, $email); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Pedido recebido com sucesso. Aguarde a finalização';
    $mail->CharSet = 'UTF-8';
    $mail->Body = "<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	
	
	<style>
		*{
			padding:0px;margin:0px;
			font-family: sans-serif;
		}
	</style>
</head>
<body>

	   <div style='width:620px;height:auto;margin:0 auto;'>
	   	 <img src='https://ci4.googleusercontent.com/proxy/Kt636vL2n0k2PHrBaG8rIRq4ogu_RJL5z3J_U2LwOjaptSaqHgq7BPwu8xSFM2FwpA_JSodwG-6zcHbCF_cazNYhEffMD9_ynHAc7-Qm8WT0ZEaLBd52lNJaeEypcIbFDMANshtn=s0-d-e1-ft#https://123milhas.com/img/email-mkt/abandonment-on-payment/header-123__20220202.jpg'>
	   </div>

	    <div style='width:620px;height:auto;margin:0 auto;padding:10px;'>
	    	<h1>Olá, $nome!</h1>
	    	<br>
	    	<p>Recebemos o seu pedido de código <strong>$string-$string1-Q-23.</strong></p>
	    	<br>
	    	<p>Para darmos prosseguimento ao processo de emissão, aguardamos o pagamento:</p> <br>
	    	<p>Efetue o pagamento até às $hora do dia $data e, em seguida, acompanhe seu pedido por aqui.</p>

	    	 <br>
	    	     <p>Copie o pix abaixo</p> <br>
               <p><strong>$pix</strong></p>
	    	 <br>
	    	<p>Após esse prazo, o link ficará inativo e NÃO será mais possível efetuar o pagamento. Caso isso ocorra e ainda haja interesse pela compra, um novo pedido deve ser realizado.</p>
	    	<br><br><br>
	    	 <h1 style='font-size:16px;'>Obrigado! <br>
Equipe 123Milhas</h1>
<br><br>
	    </div>
	    <div style='width:620px;height:auto;margin:0 auto;'>
	   	 <center><img src='https://ci5.googleusercontent.com/proxy/HU3nm3Ibs9k8Jf7I4tQ6OFMoUf-MfMJaTgy1aCpB41iH4OwgvjtvBGl4WcDLeR-wX8ZUdHb6W6vBm_LlQl0qRHZotqwVbVgUI0UN_Egkq1I1AUM-cglIwb1XMRE3cYo_9rrWFaY=s0-d-e1-ft#https://123milhas.com/img/email-mkt/abandonment-on-payment/banner-fidelidade-2.png'></center>
	   </div>
	
</body>
</html>";
    

   echo  $mail->send();
     
} catch (Exception $e) {
    
}
?> 