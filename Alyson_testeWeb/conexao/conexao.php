<?php
$host = "sql206.epizy.com";    // sql206.epizy.com
$usuario = "epiz_22070057";  // epiz_22070057
$senha = "yKTEvgDP1805";
$bd = "epiz_22070057_bis";   // epiz_22070057_test

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli -> connect_errno)
    echo "Falha na conexão";

?>