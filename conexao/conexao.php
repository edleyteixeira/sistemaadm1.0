<?php
	
	function connect($banco="id14320122_adm", $user="id14320122_ad",$pass="Tr1sOAllJFTE#46",$host="localhost"){
		//tenta estabelecer conexao
		$connect = mysqli_connect($host,$user,$pass,$banco);

		//consegiu conectar?
		
	if(!$connect){
		
			die(trigger_error("Não foi possivel conectar"));
			return false;
		}else{
				return $connect;
			}
	}
	

?>