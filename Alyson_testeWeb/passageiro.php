<?php

require_once("conexao/conexao.php");

$sql = new mysqli('localhost','root','','test');

$nome = $_POST['tNome'];
$cpf = $_POST['tCPF'];
$sexo = $_POST['tSexo'];
$data = $_POST['tData'];

if(empty($nome) || empty($cpf) || empty($sexo) || empty($data)) {
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Alyson_testeWeb/passageiro.html'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
} else {
    $qr = $sql->query ("INSERT INTO passageiro(nome, cpf, sexo, data_nascimento) VALUES('$nome','$cpf','$sexo','$data')");
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Alyson_testeWeb/passageiro.html'>
			<script type=\"text/javascript\"> 
			alert(\"Passageiro cadastrado com sucesso!\");
			</script>" ;
}

?>