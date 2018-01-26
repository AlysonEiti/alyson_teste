<?php
require_once("conexao/conexao.php");
$sql = new mysqli('localhost','root','','test');
$query = $sql->query("SELECT motorista, passageiro, valor FROM corrida");

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>Sistema de corrida</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="css/forma.css"/>

</head>

<body>
<div id="interface">

    <header id="cabecalho">
        <h1>Corridas compartilhadas</h1>

        <nav id="menu">
            <ul type="disc">
                <li><a href="index.html">Cadastrar</a></li>
                <li><a href="consultar.php">Consultar</a></li>
                <li><a href="alterar.php">Alterar</a></li>
            </ul>
        </nav>
    </header>

    <nav id="menu2">
        <ul type="disc">
            <li><a href="consultar.php">Corrida</a></li>
            <li><a href="consultarM.php">Motorista</a></li>
            <li><a href="consultarP.php">Passageiro</a></li>
        </ul>
    </nav>

    <h2>Sistema de consulta</h2>
    <br/><br/><br/>

    <center><table border="1"></center>
    <tr>
        <td>Motorista</td>
        <td>Passageiro</td>
        <td>Valor</td>
    </tr>
    <?php while($reg = $query->fetch_array()){?>
        <tr>
            <td><?php echo $reg["motorista"]; ?></td>
            <td><?php echo $reg["passageiro"]; ?></td>
            <td><?php echo $reg["valor"]; ?></td>
        </tr>
    <?php } ?>
    </table>

    <footer id="rodape">
        <p>Criado por Alyson Eiti <br/>
            <a href="http://facebook.com/alysoneiti" target="_blank">Facebook</a>
            <a href="https://www.youtube.com/watch?v=HOQbO74aRpo&feature=youtu.be" target="_blank">Vídeo</a>
    </footer>

</div>
</body>
</html>