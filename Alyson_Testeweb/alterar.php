<?php 

	require_once("conexao/conexao.php");
	
	$nome = $_POST['tMot'];
	$status = $_POST['tSts']; 
	
	if(empty($nome) || empty($status)) {
			echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/alterar.html'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
	} else {
		$sql = "UPDATE motorista SET status = '$status' WHERE nome = '$nome'";
		echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/testeweb/alterar.html'>
			<script type=\"text/javascript\"> 
			alert(\"Status do motorista atualizado!\");
			</script>" ;
	}
	
?>