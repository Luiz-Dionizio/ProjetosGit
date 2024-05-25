<?php
    require_once '../../../conexao.php';

    $id_user = $_POST['id_user'];
    $id_equip = $_POST['id_equip'];
    $status = $_POST['status'];
    $orcamento = $_POST['orcamento'];
    $diagnostico = $_POST['diagnostico'];
    $dataentrada = $_POST['dataentrada'];
    $datasaida = $_POST['datasaida'];
    $observacao = $_POST['observacao'];

    $teste = 1;
    $conterros = 0;
    $wstatus = 0;

    if($teste == 1){

    if(empty($id_user)){
        $conterros = $conterros + 1;
    }
    if(empty($id_equip)){
        $conterros = $conterros + 1;
    }
    if(empty($status) || ($status != "Cadastrada")){
        $conterros = $conterros + 1;
        $wstatus = $wstatus + 1;
    }
    if(empty($orcamento)){
        $conterros = $conterros + 1;
    }
    if(empty($diagnostico)){
        $conterros = $conterros + 1;
    }
    if(empty($dataentrada)){
        $conterros = $conterros + 1;
    }
    if(empty($datasaida)){
        $conterros = $conterros + 1;
    }
    
    if($conterros != 0){
        if($wstatus == "1"){
            echo '<script type = "text/javascript">
            alert("Ordem de serviço não foi cadastrada, preencha o status corretamente");
            window.location = "cadastraros.php";
        </script>';
        }
        echo '<script type = "text/javascript">
            alert("Ordem de serviço não foi cadastrada, preencha os campos obrigatórios");
            window.location = "cadastraros.php";
        </script>';  
    }else{
        $teste = 0;
    }
}
if($teste == 0 ){
    $sql = "INSERT INTO tb_os VALUES (DEFAULT, '$id_user', '$id_equip', '$status', '$orcamento', '$diagnostico', '$observacao', '$dataentrada', '$datasaida'); ";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "Erro no sql" . $sql . mysqli_error($conn);
    }

    echo '<script type = "text/javascript">
            alert("Ordem de serviço cadastrada com sucesso");
            window.location = "AreaOS.php";
        </script>';
}
?>