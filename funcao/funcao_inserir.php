<?php


	function inserir($coluna,$valor,$tabela){

		// arrays?
		if ((is_array($coluna)) and (is_array($valor))) {
			
			//tem o mesmo numero de elementos?
			if (count($coluna) == count($valor)) {
			
				// se for array montar SQL
				$inserir= "INSERT INTO {$tabela}(".implode(',',$coluna).")
				VALUES ('".implode('\',\'',$valor)."')";
			}else{
				return false;
			}
			}else{
				//se nao for array é so montar SQL
				$inserir = "INSERT INTO {$tabela}({$coluna}) VALUES ('{$valor}')";
		}
		//CONECTOU?
		if ($conexao = connect()){

			//inseriu?
			if (mysqli_query($conexao,$inserir)){
				//fecha conexao
				fechaconexao($conexao);
				return true;
			}else{
				echo "Query Inválida";
				return false;
			}
		}else{
			return false;
		}
	}

?>