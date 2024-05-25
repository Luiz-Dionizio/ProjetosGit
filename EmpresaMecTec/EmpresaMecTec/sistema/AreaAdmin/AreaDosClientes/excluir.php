<?php
require_once '../../../conexao.php';

$id_user = $_GET['id_user'];
$sql = " DELETE FROM tb_user WHERE id_user = '$id_user'; ";

$query = mysqli_query($conn, $sql);

mysqli_close($conn);

echo '<script type = "text/javascript">
            alert("Credenciais do usuário deletado.");
            window.location = "consultarcliente.php";
        </script>';

 ?>