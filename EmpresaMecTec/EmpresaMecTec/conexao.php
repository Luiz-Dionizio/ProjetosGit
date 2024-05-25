<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bd_mectec';

$conn = mysqli_connect($servername,$username,$password,$database);

mysqli_set_charset($conn, "utf8");

if (!$conn){
    echo "Erro no: ". mysqli_error($conn);
}
?>