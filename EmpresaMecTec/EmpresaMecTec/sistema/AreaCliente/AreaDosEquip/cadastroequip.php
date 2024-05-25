<?php
    require_once '../../../conexao.php';

    $id_cli = $_POST['id_cli'];
    $nome_user = $_POST['nome_user'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $obs = $_POST['observacao'];

    $teste = 1;
    $conterros = 0;

    if($teste == 1){

    if(empty($id_cli)){
        $conterros = $conterros + 1;
    }
    if(empty($nome_user)){
        $conterros = $conterros + 1;
    }
    if(empty($marca)){
        $conterros = $conterros + 1;
    }
    if(empty($modelo)){
        $conterros = $conterros + 1;
    }
    if(empty($cor)){
        $conterros = $conterros + 1;
    }
    

    if($conterros != 0){
        echo '<script type = "text/javascript">
            alert("Equipamento não foi cadastrado, preencha os campos obrigatórios");
            window.location = "../AreaCliente.php";
        </script>';            
    }else{
        $teste = 0;
    }
}

if($teste == 0 ){
    $sql = "INSERT INTO tb_equipamento VALUES (DEFAULT, '$id_cli', '$nome_user', '$marca', '$modelo', '$cor', '$obs'); ";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "Erro no sql" . $sql . mysqli_error($conn);
    }

    echo '<script type = "text/javascript">
            alert("Equipamento cadastrado com sucesso");
            window.location = "../AreaCliente.php";
        </script>';
}
?>