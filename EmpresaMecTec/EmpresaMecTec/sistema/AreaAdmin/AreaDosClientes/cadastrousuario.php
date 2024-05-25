<?php
    require_once '../../../conexao.php';

    $niv_perm = $_POST['niv_perm'];
    $nome_user = $_POST['nome_user'];
    $login_user = $_POST['login_user'];
    $senha_user = $_POST['senha_user'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $telefone2 = $_POST['telefone2'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];

    $teste = 1;
    $conterros = 0;

    if($teste == 1){

    if(empty($niv_perm) || $niv_perm != 1 && $niv_perm != 2){
        $conterros = $conterros + 1;
    }
    if(empty($nome_user)){
        $conterros = $conterros + 1;
    }
    if(empty($login_user)){
        $conterros = $conterros + 1;
    }
    if(empty($senha_user)){
        $conterros = $conterros + 1;
    }
    if(empty($email)){
        $conterros = $conterros + 1;
    }
    if(empty($telefone)){
        $conterros = $conterros + 1;
    }
    if(empty($cpf)){
        $conterros = $conterros + 1;
    }
    if(empty($rg)){
        $conterros = $conterros + 1;
    }
    if(empty($rua)){
        $conterros = $conterros + 1;
    }
    if(empty($bairro)){
        $conterros = $conterros + 1;
    }
    if(empty($cidade)){
        $conterros = $conterros + 1;
    }
    if(empty($numero)){
        $conterros = $conterros + 1;
    }
    if(empty($cep)){
        $conterros = $conterros + 1;
    }  

    if($conterros != 0){
        echo '<script type = "text/javascript">
            alert("Credenciais do usuário não foram cadastradas, preencha os campos obrigatórios");
            window.location = "cadastrarusuario.php";
        </script>';            
    }else{
        $teste = 0;
    }
}

if($teste == 0 ){
    $sql = "INSERT INTO tb_user VALUES (DEFAULT, '$niv_perm', '$nome_user', '$login_user', '$senha_user', '$email', '$telefone', '$telefone2', '$cpf', '$rg', '$rua', '$bairro', '$cidade', '$numero', '$complemento', '$cep'); ";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "Erro no sql" . $sql . mysqli_error($conn);
    }

    echo '<script type = "text/javascript">
            alert("Uusuário cadastrado com sucesso");
            window.location = "CadastrarUsuario.php";
        </script>';
}
?>