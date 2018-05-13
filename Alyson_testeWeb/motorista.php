<?php

require_once("conexao/conexao.php");

$sql = new mysqli('sql206.epizy.com','epiz_22070057','yKTEvgDP1805','epiz_22070057_bis');

$nome = ucfirst($_POST['tNome']);
$cpf = $_POST['tCPF'];
$sexo = $_POST['tSexo'];
$data = $_POST['tData'];
$carro = ucfirst($_POST['tCar']);
$status = $_POST['tSts'];

if(empty($nome) || empty($cpf) || empty($sexo) || empty($data) || empty($carro) || empty($status)) {
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/index.html'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
} else {
    $qr = $sql->query("INSERT INTO motorista(nome, cpf, sexo, data_nascimento, carro, status) VALUES('$nome','$cpf','$sexo','$data','$carro','$status')");
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/index.html'>
			<script type=\"text/javascript\"> 
			alert(\"Motorista cadastrado com sucesso!\");
			</script>" ;
}

?>