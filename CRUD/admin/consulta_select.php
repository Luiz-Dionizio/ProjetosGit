<?php require_once '../conexao.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="cidade">
        <?php
            $sql = "SELECT * FROM tb_cidades;";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                while ( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ) {
        ?>
                    <option value=" <?php echo $row['id_cidade']; ?> ">
                            <?php echo $row['nome_cidade']; ?>
                    </option>

               <?php
                }
            }
            ?>
        ?>
    </select>
</body>
</html>