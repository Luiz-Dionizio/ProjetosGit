<?php
    require_once '../conexao.php';

    session_start();

    if(!isset ($_SESSION['id_user']) ) {
        echo '
            <script type = "text/javascript">
            alert( "Você precisa está logado para acessar essa página!");
            window.location = "../index.php"
            </script>
            ';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5> Bem vindo, Administrador <?php echo $_SESSION['nome_user'];?> </h5>
    <form method="POST" action="cadastro_cidade.php">
        <h3>Cadastro de Cidades</h3>
        <label>Cidade: </label>
        <input type="text" name="nome_cidade">
        <p></p>
        <input type="submit" name="cad" value="Cadastrar">
    </form>
    <a onclick="return confirm('Deseja realmente sair?');"href="../logout.php"> Sair </a>
</body>
</html>