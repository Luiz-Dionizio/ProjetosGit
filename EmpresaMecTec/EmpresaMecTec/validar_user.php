<?php
    //Inclue a conexão
    require_once 'conexao.php';

    //Captura os valores dos campos e guarda as variáveis
    $senha_user = $_POST['senha_user'];
    $login_user = $_POST['login_user'];

    //Seleciona o login e senha conforme digitado no form.
    $sql= "SELECT * FROM tb_user WHERE login_user = '$login_user' AND senha_user = '$senha_user'; ";
    
    $query = mysqli_query($conn, $sql);

    //Verifica se exite linha afetada com o que foi digitado, caso for vedadeiro, $linha recebe 1.
    $linha = mysqli_num_rows($query);

    if($linha == 0){
        echo '<script type = "text/javascript">
            alert("Usuário ou Senha não encontrado");
            window.location = "login.php";
        </script>';
    }else{
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $niv_perm = $row['niv_perm'];

        if($niv_perm == 2){
            $id_user = $row['id_user'];
            $niv_perm = $row['niv_perm'];
            $nome_user = $row['nome_user'];
            $login_user = $row['login_user'];
            $senha_user = $row['senha_user'];

            session_start();

            $_SESSION['id_user'] = $id_user;
            $_SESSION['niv_perm'] = $niv_perm;
            $_SESSION['nome_user'] = $nome_user;
            $_SESSION['login_user'] = $login_user;
            $_SESSION['senha_user'] = $senha_user;
            

            header('location: sistema/AreaAdmin/AreaAdmin.php');

        }else if($niv_perm == 1){
            $id_user = $row['id_user'];
            $niv_perm = $row['niv_perm'];
            $nome_user = $row['nome_user'];
            $login_user = $row['login_user'];
            $senha_user = $row['senha_user'];   

            session_start();

            $_SESSION['id_user'] = $id_user;
            $_SESSION['niv_perm'] = $niv_perm;
            $_SESSION['nome_user']= $nome_user;
            $_SESSION['login_user'] = $login_user;
            $_SESSION['senha_user'] = $senha_user;

            header('location: sistema/AreaCliente/AreaCliente.php');
        }else{
            echo '<script type = "text/javascript">
                alert("Usuário não detectado");
                window.location = "login.php";
            </script>';
        }
    }
   ?>