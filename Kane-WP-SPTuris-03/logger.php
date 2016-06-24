<?php
session_start();

$host = "plesk52.hospedagemdesites.ws";
$user = "imprensssa";
$pass = "sssa0101!";
$db = "spturis_imprensa";

$con = @mysql_connect($host, $user, $pass) or die("Erro na conexao do banco de dados");
@mysql_select_db($db);

$usuario = $_SESSION['usuario_logado'];

if($usuario->ID == 0){
header("Location: http://imprensa.spturis.com.br/fotos/ ");
exit();
}

if($_GET['url']){
$imagem = $_GET['url'];
} else {
header("Location: http://imprensa.spturis.com.br/fotos/");
exit();
}

$username = $usuario->user_login;
$email = $usuario->user_email;
// $firstname = $usuario->user_firstname;
// $lastname = $usuario->user_lastname;
$displayname = $usuario->display_name;
$userid = $usuario->ID;
$dia = date('Y-m-d');
$hora = date('H:i:s');

$sql01 = "INSERT INTO logger (username, email, firstname, lastname, displayname, userid, data, hora, imagem) VALUES ('$username', '$email', '', '', '$displayname', $userid, '$dia', '$hora', '$imagem');";

if(!mysql_query($sql01, $con)){
die("Erro no log <hr />".mysql_error());	
} else {
header("Location: ".$imagem);
}

