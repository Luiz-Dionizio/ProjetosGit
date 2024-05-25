<?php
require_once '../../../conexao.php';

$id_os = $_GET['id_os'];
$sql = " DELETE FROM tb_os WHERE id_os = '$id_os'; ";

$query = mysqli_query($conn, $sql);

mysqli_close($conn);

echo '<script type = "text/javascript">
            alert("Ordem de serviço deletada com sucesso.");
            window.location = "consultaros.php";
        </script>';

 ?>