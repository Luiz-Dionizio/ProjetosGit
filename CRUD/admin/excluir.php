<?php 
	require_once '../conexao.php';

	$id_cidade = $_GET['id'];
	$sql = " DELETE FROM tb_cidades WHERE id_cidade = '$id_cidade'; ";

	$query = mysqli_query($conn, $sql);

	mysqli_close($conn);

	echo '<script type="text/javascript">';
	echo 'window.location="listar_dados.php"';
	echo '</script>';

 ?>

 