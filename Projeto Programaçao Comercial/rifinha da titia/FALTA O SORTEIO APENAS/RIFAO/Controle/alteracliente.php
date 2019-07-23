<?php
include ("./conectbd.php");
$conect = conexao();

$usuario = $_POST['usuario'];

if($_POST['nome'] == null){
    $nome = NULL;
}else{
    $nome = $_POST['nome'];
    $alteranome = mysqli_query($conect, "Update Usuario set nome_completo = '".$nome."' where usuario = '".$usuario."';");
}

if($_POST['wpp'] == null){
    $wpp = NULL;
}else{
    $wpp = $_POST['wpp'];
    $alterawpp = mysqli_query($conect, "Update Usuario set telefone_wpp = '".$wpp."' where usuario = '".$usuario."';");
}

if($_POST['fone'] == null){
    $fone = NULL;
}else{
    $fone = $_POST['fone'];
    $alterafone = mysqli_query($conect, "Update Usuario set telefone_2 = '".$fone."' where usuario = '".$usuario."';");
}

if($_POST['tipo'] == null){
    $tipo = NULL;
}else{
    $tipo = $_POST['tipo'];
    $alteratipo = mysqli_query($conect, "Update Usuario set tipo = '".$tipo."' where usuario = '".$usuario."';");
}

if($_POST['email'] == null){
    $email = NULL;
}else{
    $email = $_POST['email'];
    $alteraemail = mysqli_query($conect, "Update Usuario set email = '".$email."' where usuario = '".$usuario."';");
}

if($_POST['cpf'] == null){
    $cpf = NULL;
}else{
    $cpf = $_POST['cpf'];
    $alteracpf = mysqli_query($conect, "Update Usuario set cpf = '".$cpf."' where usuario = '".$usuario."';");
}

if($_POST['nascimento'] == null){
    $nascimento = NULL;
}else{
    $nascimento = $_POST['nascimento'];
    $alteranascimento = mysqli_query($conect, "Update Usuario set data_nascimento = '".$nascimento."' where usuario = '".$usuario."';");
}

if($_POST['cidade'] == null){
    $cidade = NULL;
}else{
    $cidade = $_POST['cidade'];
    $alteracidade = mysqli_query($conect, "Update Usuario set Cidade = '".$cidade."' where usuario = '".$usuario."';");
}

if($_POST['uf'] == null){
    $uf = NULL;
}else{
    $uf = $_POST['uf'];
    $alterauf = mysqli_query($conect, "Update Usuario set UF = '".$uf."' where usuario = '".$usuario."';");
}

if($_POST['bairro'] == null){
    $bairro = NULL;
}else{
    $bairro = $_POST['bairro'];
    $alterabairro = mysqli_query($conect, "Update Usuario set Bairro = '".$bairro."' where usuario = '".$usuario."';");
}

if($_POST['rua'] == null){
    $rua = NULL;
}else{
    $rua = $_POST['rua'];
    $alterarua = mysqli_query($conect, "Update Usuario set Rua = '".$rua."' where usuario = '".$usuario."';");
}

if($_POST['numero'] == null){
    $numero = NULL;
}else{
    $numero = $_POST['numero'];
    $alteranumero = mysqli_query($conect, "Update Usuario set Numero = ".$numero." where usuario = '".$usuario."';");
}

if($_POST['cep'] == null){
    $cep = NULL;
}else{
    $cep = $_POST['cep'];
    $alteracep = mysqli_query($conect, "Update Usuario set CEP = '".$cep."' where usuario = '".$usuario."';");
}

if($_POST['complemento'] == null){
    $complemento = NULL;
}else{
    $complemento = $_POST['complemento'];
    $alteracomplemento = mysqli_query($conect, "Update Usuario set Complemento = '".$complemento."' where usuario = '".$usuario."';");
}

if($_POST['senha'] == null){
    $senha = NULL;
}else{
    $senha = $_POST['senha'];
    $alterasenha = mysqli_query($conect, "Update Usuario set senha = '".$senha."' where usuario = '".$usuario."';");
}


header("Location: ../Mostrar/AdmMain.php?alterado");