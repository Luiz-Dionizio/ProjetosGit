<?php
    require_once '../../../conexao.php';

    $id_os = $_POST['id_os'];
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

    if(empty($status) || ($status == "Cadastrada")){
        $conterros = $conterros + 1;
        $wstatus = $wstatus + 1;
    }
    if(empty($orcamento)){
        $conterros = $conterros + 1;
    }
    if(empty($diagnostico)){
        $conterros = $conterros + 1;
    }

    if($conterros != 0){
        if($wstatus == "1"){
            echo '<script type = "text/javascript">
            alert("Ordem de serviço não foi alterada, preencha o status corretamente");
            window.location = "consultaros.php";
        </script>';
        }
        echo '<script type = "text/javascript">
            alert("Ordem de serviço não foi alterada, preencha os campos obrigatórios");
            window.location = "consultaros.php";
        </script>';  
    }else{
        $teste = 0;
    }
    
}

if($teste == 0 ){
    $sql = "UPDATE tb_os SET id_os = '$id_os', id_user = '$id_user', id_equip = '$id_equip', status = '$status', orcamento = '$orcamento', diagnostico = '$diagnostico' , observacao = '$observacao', dataentrada = '$dataentrada', datasaida = '$datasaida' WHERE id_os = '$id_os'; ";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        echo "Erro no sql" . $sql . mysqli_error($conn);
    }

    echo '<script type = "text/javascript">
            alert("Ordem de serviço alterada com sucesso");
            window.location = "consultaros.php";
        </script>';
}
?>