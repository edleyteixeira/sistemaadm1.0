<?php
date_default_timezone_set('America/Sao_Paulo');

@$os = $_REQUEST['os'];
$data = date('d/m/Y');
$hora = date('H:m');
$sit = 1;




// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_atualizar.php");

$att = atualizar(array("situacao", "datafechamento", "horafechamento"), array($sit, $data, $hora), "os",  "WHERE os = '$os'");

if ($att == true) {
	
	header("location: os.php?info=sucesso#baixa");
}else{

	header("location: fecharos.php?os=$os");
}

