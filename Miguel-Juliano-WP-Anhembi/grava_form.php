<?php

include('conexao.php');
$conexao = conecta();

$nome_evento = $_POST['nome_evento'];
$nome_estande = $_POST['nome_estande'];
$local = $_POST['local'];
$razao_social = $_POST['razao_social'];
$cnpj_mj = $_POST['cnpj_mj'];
$cobranca_end = $_POST['cobranca_end'];
$cobranca_cep = $_POST['cobranca_cep'];
$cobranca_bairro = $_POST['cobranca_bairro'];
$cobranca_cidade = $_POST['cobranca_cidade'];
$cobranca_uf = $_POST['cobranca_uf'];
$fatura_end = $_POST['fatura_end'];
$fatura_cep = $_POST['fatura_cep'];
$fatura_bairro = $_POST['fatura_bairro'];
$fatura_cidade = $_POST['fatura_cidade'];
$fatura_uf = $_POST['fatura_uf'];
$contato_nome = $_POST['contato_nome'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$rep = $_POST['rep'];
$rep_nac = $_POST['rep_nac'];
$rep_profissao = $_POST['rep_profissao'];
$rep_escivil = $_POST['rep_escivil'];
$rep_rg = $_POST['rep_rg'];
$rep_cpf = $_POST['rep_cpf'];
$rep_cargo = $_POST['rep_cargo'];
$telefoniaData = $_POST['telefoniaData'];
$sessenta = $_POST['sessenta'];
$cod60 = $_POST['cod60'];
$valorunit = 1;

$query = "SELECT * FROM clientes WHERE cnpj = '$cnpj_mj'";
$cliente = mysql_query($query);
$linhas = mysql_num_rows($cliente);

if ($linhas == 0) {
   $sqlcli = "INSERT INTO clientes (razaosoc,cnpj,rglegal,endercobra,cepcobra,bairrocobra,cidadecobra,ufcobra,enderfat,cepfat,bairrofat,cidadefat,uffat,contatofat,telefonefat,cargofat,emailfat,representlegal,cargolegal,profissaolegal,nacionalegal,estcivilegal,cpflegal) VALUES ('$razao_social','$cnpj_mj','$rep_rg','$cobranca_end','$cobranca_cep','$cobranca_bairro',
'$cobranca_cidade','$cobranca_uf','$fatura_end','$fatura_cep','$fatura_bairro','$fatura_cidade','$fatura_uf',
'$contato_nome','$tel','$cargo','$email','$rep','$rep_cargo',
'$rep_profissao','$rep_nac','$rep_escivil','$rep_cpf')";
   $gravacli = mysql_query($sqlcli);
   if (mysql_errno($conexao)) echo "Erro 1 ".mysql_errno().": ".mysql_error()."\n<br>Executando<br>\n$query\n<br>";
   else {
	   $id_cliente = mysql_fetch_array(mysql_query("SELECT MAX(id) as id FROM clientes LIMIT 1"));	
	   $idcliente = $id_cliente['id'];
   }
}
if ($linhas == 1) {
   $id_cliente = mysql_fetch_array($cliente);	
   $idcliente = $id_cliente['id'];
}

$data = date("Y-m-d");
$sql = "INSERT INTO telecom_solicitacoes (id_cliente,id_evento,data,status,estandelocal,estandenome) VALUES ($idcliente,0,'$data','ATIVA','$local','$nome_estande')";
$grava = mysql_query($sql);
if (mysql_errno($conexao)) echo "Erro 2 ".mysql_errno().": ".mysql_error()."\n<br>Executando<br>\n$query\n<br>";
else {
	   $id_solic = mysql_fetch_array(mysql_query("SELECT MAX(id) as id FROM telecom_solicitacoes LIMIT 1"));	
	   $idsolic = $id_solic['id'];
	   $data1 = converte_data($telefoniaData);
	   $data2 = converte_data($telefoniaData);
	   $vtotal = 2;
	   $sql2 = "INSERT INTO telecom_itens_solicitacao (id_solicitacao,id_servico,qtde,valor_unit,dt_inicio,dt_fim,valor_total) VALUES ($idsolic,$sessenta,$cod60,$valorunit,'$data1','$data2',$vtotal)";
	   $record = mysql_query($sql2);
	   if (mysql_errno($conexao)) echo "Erro 3 ".mysql_errno().": ".mysql_error()."\n<br>Executando<br>\n$query\n<br>";
	   else {
		   echo "<script language=\"javascript\" type=\"text/javascript\">alert('Foi');</script>";
   echo "<script language=\"javascript\" type=\"text/javascript\">window.location = 'http://www.anhembi.com.br/formulario-telecom-teste/';</script>";
	   }
}




