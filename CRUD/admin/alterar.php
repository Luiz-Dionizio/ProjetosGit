<?php 
	require_once '../conexao.php';

	$id_cidade = $_POST['id_cidade'];
	$nome_cidade = $_POST['nome_cidade'];

	$sql = " UPDATE tb_cidades SET nome_cidade = '$nome_cidade' WHERE id_cidade = '$id_cidade'; ";

	$query = mysqli_query($conn, $sql);

	mysqli_close($conn);

	echo '<script type="text/javascript">';
	echo 'window.location="listar_dados.php"';
	echo '</script>';

?>