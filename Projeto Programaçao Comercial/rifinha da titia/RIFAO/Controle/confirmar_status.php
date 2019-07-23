<?php
    
    //Não está feito
  require_once ('conectbd.php');
    
    $aceito = $_GET["aceito"];
    $id = $_GET["id"];
    
    $sql = "UPDATE Pontos SET status = '$aceito' WHERE id_solicitacao = $id";
    
    
    $res = mysqli_query($con, $sql);
    
    if($res){
        echo "<script>window.location='http://localhost/Salao_AlineLima/View/listar_solicitacao.php';</script>";
    }
    else {
        echo 'Erro: '. mysqli_error($con);
    }