<?php
include("../_conexao/conexao.php");
include("../_conexao/fecha_conexao.php");

function deleta($tabela,$where=Null){

	//montar sql
	$delete = "DELETE FROM {$tabela} {$where}";

	//conectou?

	if($con= connect()){

		//deletou?
		if(mysqli_query($con,$delete)){
			fechaconexao($con);
			return true;
		}else{
			//mostraq msg de erro
			echo "Query invalida {$delete}";
			return false;
		}
	}else{
		return false;
	}
}

?>