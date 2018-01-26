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

    <nav id="menu2">
        <ul type="disc">
            <li><a href="index.html">Motorista</a></li>
            <li><a href="passageiro.html">Passageiro</a></li>
            <li><a href="corrida.php">Corrida</a></li>
        </ul>
    </nav>
    <h2>Sistema de cadastro</h2>
    <br/><br/>

    <?php
    require_once("conexao/conexao.php");
    $sql = new mysqli('localhost','root','','test');
    $query = $sql->query("SELECT nome FROM motorista WHERE status = 'Ativo' ORDER BY nome");
    $query2 = $sql->query("SELECT nome FROM passageiro");
    ?>

    <form action="registrarCorrida.php" method="post" id="cCadastro">
        <fieldset id="corrida">
            <legend>Registrar corrida</legend>
            <p><label for="cMot">Motorista </label><select name="tMot" id="cMot">
                    <?php while($reg = $query->fetch_array()) { ?>
                    <option value="<?php echo $reg['nome']; ?>">
                        <?php echo $reg['nome']; ?>
                    </option>
                    <?php } ?>
                </select></p>

            <p><label for="cPag">Passageiro </label><select name="tPag" id="cPag">
                    <?php while($reg2 = $query2->fetch_array()) { ?>
                        <option value="<?php echo $reg2['nome']; ?>">
                            <?php echo $reg2['nome']; ?>
                        </option>
                    <?php } ?>
                </select></p>

            <p><label for="cVal">Valor da corrida R$ </label><input type="number" step="0.01" name="tVal" id="cVal" min="0" max="9999999" placeholder="Valor da corrida" required/></p>

        </fieldset>
        <input type="hidden" name="acao" value="cadastrado"/>
        <center><input class="botao" type="submit" value="Cadastrar" name="tCad" id="cCad"/></center>

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