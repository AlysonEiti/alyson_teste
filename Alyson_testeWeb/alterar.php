<!DOCTYPE html>
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

    <h2>Alterar status de motorista</h2>

    <?php
    require_once("conexao/conexao.php");
    $sql = new mysqli('localhost','root','','test');
    $query = $sql->query("SELECT nome FROM motorista ORDER BY nome");
    ?>

    <form action="alterarSts.php" method="post" id="cCadastro">
        <fieldset id="corrida">
            <legend>Registrar Corrida</legend>
            <p><label for="cMot">Motorista </label><select name="tMot" id="cMot">
                    <?php while($reg = $query->fetch_array()) { ?>
                        <option value="<?php echo $reg['nome']; ?>">
                            <?php echo $reg['nome']; ?>
                        </option>
                    <?php } ?>
                </select></p>

            <p><label for="cSts">Status </label><select name="tSts" id="cSts">
                    <option value="Ativo" selected>Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select></p>

        </fieldset>
        <input type="hidden" name="acao" value="atualizado"/>
        <center><input class="botao" type="submit" value="Atualizar" name="tAtt" id="cAtt"/></center>

        <br/><br/><br/>
    </form>

    <footer id="rodape">
        <p>Criado por Alyson Eiti <br/>
            <a href="http://facebook.com/alysoneiti" target="_blank">Facebook</a>
            <a href="https://www.youtube.com/watch?v=HOQbO74aRpo&feature=youtu.be" target="_blank">Vídeo</a>
    </footer>

</div>
</body>
</html>