 <?php
date_default_timezone_set('America/Sao_Paulo');

$modo = $_REQUEST['modo'];
$id_produto = $_REQUEST['id_produto'];
$validade = $_REQUEST['validade'];
$qtd = $_REQUEST['qtd'];



// INCLUI A CONEXAO
include ("conexao/conexao.php");
include ("conexao/fecha_conexao.php");
include ("funcao/funcao_inserir.php");
include ("funcao/funcao_select2.php");


$cc = select("produtos", "*", "WHERE id = '$id_produto'" );
$cat = $cc[0]['categoria'];

///  AQUI O SISTEMA DAR ENTRADA DE PRODUTOS

if ($modo == 'entrada') {
	
for ($i=0; $i < $qtd ; $i++) { 

$grava = inserir(array("id_produto", "validade"),
	array($id_produto, $validade), "estoque" ) ;
}

if ($grava == true) {
	
	header("location: produtos.php?cat=$cat&entrada=sucesso");
}else{

	header("location: produtos.php?cat=$cat&entrada=fail");
}
}

?>