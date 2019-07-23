<?php

include ("./conectbd.php");
$conect = conexao();

$cod = $_POST['cod'];

if($_POST['nome'] == null){
    $nome = NULL;
}else{
    $nome = $_POST['nome'];
    $alteranome = mysqli_query($conect, "Update Rifa set nome_rifa = '".$nome."' where cod_rifa = '".$cod."';");
}

if($_POST['inicio'] == null){
    $inicio = NULL;
}else{
    $inicio = $_POST['inicio'];
    $alterainicio = mysqli_query($conect, "Update Rifa set data_inicio = '".$inicio."' where cod_rifa = '".$cod."';");
}

if($_POST['sorteio'] == null){
    $sorteio = NULL;
}else{
    $sorteio = $_POST['sorteio'];
    $alterasorteio = mysqli_query($conect, "Update Rifa set data_sorteio = '".$sorteio."' where cod_rifa = '".$cod."';");
}

if($_POST['status'] == null){
    $status = NULL;
}else{
    $status = $_POST['status'];
    $alterastatus = mysqli_query($conect, "Update Rifa set status = '".$status."' where cod_rifa = '".$cod."';");
}

if($_POST['ganhador'] == null){
    $ganhador = NULL;
}else{
    $ganhador = $_POST['ganhador'];
    $alteraganahdor = mysqli_query($conect, "Update Rifa set ganhador = '".$ganhador."' where cod_rifa = '".$cod."';");
}

if($_POST['desc'] == null){
    $desc = NULL;
}else{
    $desc = $_POST['desc'];
    $alteradesc = mysqli_query($conect, "Update Rifa set descricao = '".$desc."' where cod_rifa = '".$cod."';");
}

header("Location: ../Mostrar/AdmMain.php");



