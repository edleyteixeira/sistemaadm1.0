<?php
	function fechaconexao($connect){
		$fecha=mysqli_close($connect);
		if(!$fecha){
			echo "Impossivel fechar conexao";
			return false;
		}else{
			return true;
		}
	}

?>