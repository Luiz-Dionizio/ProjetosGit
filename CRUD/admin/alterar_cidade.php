<?php require_once '../conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
</head>
<body>
    <h1>Alterar Cidade</h1>
    
    <form name="form_alterar" method="POST" action="alterar.php">
        <?php 
            $idAlt = $_GET['id'];
            $sql = " SELECT * FROM tb_cidades WHERE id_cidade = '$idAlt'; ";
            $query = mysqli_query($conn, $sql);
            if($query){
                while( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ){
        ?>
        <label> Id </label>
        <p></p>
        <input readonly="true" type="text" name="id_cidade" value=" <?php echo $row['id_cidade']; ?> ">

        <p></p>
        <label>Nome da Cidade: </label>
        <p></p>
        <input type="text" name="nome_cidade" value=" <?php echo $row['nome_cidade']; ?> ">

        <?php 
            }
                }
         ?>

        <p><input type="submit" value="Alterar" name="alterar" ></p>
        
    </form>
    <p></p>

</body>
</html>