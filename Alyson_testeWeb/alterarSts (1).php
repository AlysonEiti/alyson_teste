<?php

require_once("conexao/conexao.php");

$sql = new mysqli('sql206.epizy.com','epiz_22070057','yKTEvgDP1805','epiz_22070057_bis');

$motorista = $_POST['tMot'];
$status = $_POST['tSts'];

if(empty($motorista) || empty($status)) {
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/alterar.php'>
			<script type=\"text/javascript\"> 
			alert(\"Favor preencher todos os campos!\");
			</script>" ;
} else {
    $qr = $sql->query("UPDATE motorista SET status = '$status' WHERE nome = '$motorista'");
    echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://sennokiseki.epizy.com/alterar.php'>
			<script type=\"text/javascript\"> 
			alert(\"Status do motorista alterado com sucesso!\");
			</script>" ;
}

?>
