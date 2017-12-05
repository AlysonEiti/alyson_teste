<?php 

	require_once("conexao/conexao.php");
	
	$motorista = $_POST['tMot'];
	$passageiro = $_POST['tPag'];
	$valor = $_POST['tVal']; 
	
	if(empty($motorista) || empty($passageiro) || empty($valor)) {
			echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/corrida.html'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
	} else {
		$sql = "INSERT INTO corrida(motorista, passageiro, valor) VALUES('$motorista','$passageiro','$valor')";
		echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/corrida.html'>
			<script type=\"text/javascript\"> 
			alert(\"Corrida cadastrado com sucesso!\");
			</script>" ;
	}
	
?>