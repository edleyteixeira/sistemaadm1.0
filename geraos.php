 <?php
date_default_timezone_set('America/Sao_Paulo');

$solic = $_REQUEST['solic'];
$servico = $_REQUEST['servico'];
$resp = $_REQUEST['resp'];
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];
$motivo = $_REQUEST['motivo'];
$os = "NP".date('yd').date('his');

// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_inserir.php");


$grava = inserir(array("os", "solicitante",	"tipo",	"responsavel",	"data",	"hora",	"motivo"),
							 array($os, $solic , $servico , $resp , $data , $hora , $motivo), "os" ) ;

if ($grava == true) {
	
	header("location: os.php?info=sucesso");
}else{

	header("location: abriros.php?info=fail");
}


?>