<?php 

	require_once("conexao/conexao.php");
	
	$nome = $_POST['tNome'];
	$cpf = $_POST['tCPF'];
	$sexo = $_POST['tSexo'];
	$data = $_POST['tData']; 
	
	if(empty($nome) || empty($cpf) || empty($sexo) || empty($data)) {
			echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/passageiro.html'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
	} else {
		$sql = "INSERT INTO motorista(nome, cpf, sexo, data) VALUES('$nome','$cpf','$sexo','$data')";
		echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/passageiro.html'>
			<script type=\"text/javascript\"> 
			alert(\"Passageiro cadastrado com sucesso!\");
			</script>" ;
	}
	
?>