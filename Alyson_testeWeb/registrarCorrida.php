<?php

require_once("conexao/conexao.php");

$sql = new mysqli('sql206.epizy.com','epiz_22070057','yKTEvgDP1805','epiz_22070057_bis');

$motorista = $_POST['tMot'];
$passageiro = $_POST['tPag'];
$valor = $_POST['tVal'];

if(empty($motorista) || empty($passageiro) || empty($valor)) {
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/corrida.php'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
} else {
    $qr = $sql->query("INSERT INTO corrida(motorista, passageiro, valor) VALUES('$motorista','$passageiro','$valor')");
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/corrida.php'>
			<script type=\"text/javascript\"> 
			alert(\"Corrida cadastrado com sucesso!\");
			</script>" ;
}

?>


