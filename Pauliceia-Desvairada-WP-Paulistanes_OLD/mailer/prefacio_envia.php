<?php

// incluiu a classe
require_once('phpmailer510/class.phpmailer.php');


// pegou os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


// Escreve E-mail
$msg .= "<html><head></head><body style = 'background-color:#000;'><table style = 'width:600px; background-color:#fff; margin: 0 auto; margin-top: 30px; margin-bottom: 30px; padding: 30px 0 30px 0;' cellpadding = '0' cellspacing = '0' border = '0'><tr>";
$msg .= "<td style = 'height: 199px; width: 600px;'><img src = 'http://paulistanes.spturis.com.br/wp-content/themes/Pauliceia-Desvairada-WP-Paulistanes/images/mail-topo.gif' alt = 'Topo Paulistanes'></td></tr><tr><td style = 'width: 540px; padding: 60px 30px 60px 30px;'>";
$msg .= "<p style = 'font-family:Arial; font-size:14px'><b>Nome:</b> $nome</p>";
$msg .= "<p style = 'font-family:Arial; font-size:14px'><b>E-mail:</b> $email</p>";
$msg .= "<p style = 'font-family:Arial; font-size:14px'><b>Mensagem:</b> $mensagem</p>";
$msg .= "</td></tr><tr><td style = 'height: 66px; width: 600px;'><img src = 'http://paulistanes.spturis.com.br/wp-content/themes/Pauliceia-Desvairada-WP-Paulistanes/images/mail-bottom.gif' alt = 'Rodape Paulistanes'></td></tr></table></body></html>";


$objeto_email = new PHPMailer(true); // cria o objeto
$objeto_email->IsSMTP(TRUE); // definiu smtp
$objeto_email->Host = "10.1.0.6"; // SMTP server
$objeto_email->Port = 25; // Porta do servidor
$objeto_email->Username = "form_spturis_observatorio@spturis.com";
$objeto_email->Password = "spt0112bozo";
$objeto_email->CharSet = "iso-8859-1";
$objeto_email->SetLanguage("br");
$objeto_email->SetFrom('caroline.marchini@spturis.com'); // EMAIL FROM
$objeto_email->IsHTML = TRUE;
$objeto_email->AddReplyTo('noreply@spturis.com', ' Favor não responder');

$objeto_email->AddAddress("caroline.marchini@spturis.com'");

$objeto_email->Subject = "Contato site: Paulistanês";
$objeto_email->AltBody = 'Este email só pode ser lido em um leitor compatível com HTML. To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
$objeto_email->MsgHTML($msg);


if ($objeto_email->Send()) {
    header('Location: http://paulistanes.spturis.com.br/?page_id=893');
} else {
    header('Location: http://paulistanes.spturis.com.br/?page_id=892');
}
?>

