<?php require_once '../conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilo_form.css">
</head>
<body>
        <center>

            <p></p>

            <form method="POST">
                <label><h1>Pesquisa de cidades</h1></label>
                <center>
                    <input type="text" name="tx_pesquisa">
                    <input type="submit" value="Pesquisar">
                </center>
            </form>

            <h2> Listando Cidades </h2>

            <table border="1">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Cidades </th>
                    </tr>
                </thead>
                <?php 
                    $tx_pesq = $_POST['tx_pesquisa'];
                    $sql = "SELECT * FROM tb_cidades WHERE nome_cidade LIKE '$tx_pesq%';";
                    $query = mysqli_query($conn, $sql);
                    if( $query ){
                        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $row['id_cidade']; ?>
                            </td>
                            <td>
                                <?php echo $row['nome_cidade']; ?>
                            </td>
                            <td>
                                <a href="alterar_cidade.php?id=<?php echo $row['id_cidade']; ?>"> Alterar </a>
                            </td>
                            <td>
                                <a onclick=" return confirm('Deseja realmente excluir?'); " 
                                href="excluir.php?id=<?php echo $row['id_cidade']; ?>"> Excluir </a>
                            </td>
                        </tr>
                    </tbody>
                <?php
                        }
                    }
                ?>
            </table>
        </center>
</body>
</html>