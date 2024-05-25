<?php
    require_once '../conexao.php';

    $nome_cidade = $_POST['nome_cidade'];

    $sql = " INSERT INTO tb_cidades VALUES (NULL, '$nome_cidade'); ";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "Erro no sql" . $sql . mysqli_error($conn);
    }
    echo '<script type = "text/javascript">
    alert("Você precisa entrar logado para acessar essa página");
    window.location = "index.php";
</script>';
   
?>