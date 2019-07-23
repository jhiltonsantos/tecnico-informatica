<?php

include_once './conectbd.php';
$conect = conexao();

$senha = $_POST["senha"];
$user = $_POST["user"];


$login = mysqli_query($conect, "select * from Usuario where usuario = '".$user."' and senha = '".$senha."';");
$contalogin = mysqli_num_rows($login);
$arraylogin = mysqli_fetch_array($login);

if($contalogin>0){
    if($arraylogin['tipo'] == 'Cliente'){
        $_SESSION['usuario']= $_POST['user'];
            $_SESSION['senha']=$_POST['senha'];
            $_SESSION['acesso'] = 1;

         header("Location: ../Mostrar/cliente.php");
    }else if($arraylogin['tipo'] == 'ADM'){
        $_SESSION['usuario']=$_POST['user'];
            $_SESSION['senha']=$_POST['senha'];
            $_SESSION['acesso'] = 2;

         header("Location: ../Mostrar/AdmMain.php");
    }
}else{
    setcookie("erro", "Usuário ou senha incorretos", time()+1, "/");
    header("Location: ../Mostrar/login.php?erro1");
}


?>