<?php
session_start();

unset($_SESSION['id_user']);
unset($_SESSION['niv_perm']);
unset($_SESSION['nome_user']);
unset($_SESSION['login_user']);
unset($_SESSION['senha_user']);

session_destroy();

header('Location: index.php');

?>