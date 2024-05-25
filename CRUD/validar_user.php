<?php
    //Inclue a conexão
    require_once 'conexao.php';

    //Captura os valores dos campos e guarda as variáveis
    $senha_user = $_POST['senha_user'];
    $login_user = $_POST['login_user'];

    //Selecionao login e senha conforme digitado no form.
    $sql= "SELECT * FROM tb_user WHERE login_user = '$login_user' AND senha_user = '$senha_user'; ";
    
    $query = mysqli_query($conn, $sql);

    //Verifica se exite linha afetada com o que foi digitado, caso for vedadeiro, $linha recebe 1.
    $linha = mysqli_num_rows($query);

    if($linha == 0){
        echo '<script type = "text/javascript">
            alert("Usuário ou Senha não encontrado");
            window.location = "index.php";
        </script>';
    }else{
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);

        $id_user = $row = ['id_user'];
        $login_user = $row = ['login_user'];
        $senha_user = $row = ['senha_user'];
        $nome_user = $row = ['nome_user'];
        

        session_start();

        $_SESSION['id_user'] = $id_user;
        $_SESSION['login_user'] = $login_user;
        $_SESSION['senha_user'] = $senha_user;
        $_SESSION ['nome_user']= $nome_user;

        header('location: admin/inserir.php');
    }
    ?>