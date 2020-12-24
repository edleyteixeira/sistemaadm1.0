<?php


function select($tabela,$coluna="*",$where=NULL,$ordem=NULL,$limite=NULL){

	//SQL DA CONSULTA
	$sql="SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

	//conectou?
	if ($conexao= connect()){
		//conseguiu consultaR?
		if ($query= mysqli_query($conexao,$sql)){
			//encontrou alguma coisa?
			if (mysqli_num_rows($query)>0){
				
				$resultados_totais = array();

				while ($resultado = mysqli_fetch_assoc($query)){
					
					$resultados_totais[] = $resultado;
				}			
								
								//fecha conexao
								fechaconexao($conexao);

								return $resultados_totais;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else {
		return false;
	}
}


?>