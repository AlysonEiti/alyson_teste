<?php
	require_once("conexao/conexao.php");
	
	$consulta = "SELECT * FROM corrida";
	$conexao = $con->query($consulta) or die($con->error);
?>
<html lang="pt-br"> 

<head>
	<meta charset "UTF-8"/>
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
				<li><a href="alterar.html">Alterar</a></li>
			</ul>
		</nav>
	</header>
	
	<nav id="menu2">
		<ul type="disc">
			<li><a href="consultar.php">Corridas</a></li>
			<li><a href="consultarM.php">Motoristas</a></li>
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
		<?php while($dado = $conexao->fetch_array()){?>
		<tr>
			<td><?php echo $dado["motorista"]; ?></td>
			<td><?php echo $dado["passageiro"]; ?></td>
			<td><?php echo $dado["valor"]; ?></td>
		</tr>
		<?php } ?>
	</table>
	
	<footer id="rodape">
		<p>Criado por Alyson Eiti <br/>
		<a href="http://facebook.com/alysoneiti" target="_blank">Facebook</a>
	</footer>

</div>
</body>
</html>