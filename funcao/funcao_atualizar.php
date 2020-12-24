<?php


	function atualizar($coluna,$valor,$tabela,$where){

		// arrays?
		if ((is_array($coluna)) and (is_array($valor))) {
			
			//tem o mesmo numero de elementos?
			if (count($coluna) == count($valor)) {

				$valor_coluna = NULL;

				//colocar arrays em uma string
				for($i=0;$i<count($coluna);$i++){

					$valor_coluna .="{$coluna[$i]} = '{$valor[$i]}',";
				}
			
				//tirando virgula da ultima posicao
				$valor_coluna = substr($valor_coluna,0,-1);

				//montar sql
				$atualizar ="UPDATE {$tabela} SET {$valor_coluna} {$where}";

			}else{
				return false;
			}
			}else{
				//se nao for array é so montar SQL
				$atualizar = "UPDATE {$tabela} SET {$coluna} = '{$valor}' {$where}";
		}
		//CONECTOU?
		if ($conexao = connect()){

			//inseriu?
			if (mysqli_query($conexao,$atualizar)){
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