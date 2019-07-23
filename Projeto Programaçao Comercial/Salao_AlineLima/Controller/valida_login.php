<?php

    include_once '..\Controller\conexao.php';
    
    session_cache_expire(5);
    $cache_expire = session_cache_expire();
    session_start();
    
    $usuario = $_POST["campo_usuario"];
    $senha = $_POST["campo_senha"];
    
    $sql = "SELECT * FROM usuario WHERE login = '$usuario' AND senha = '$senha';";
    
    $res = mysqli_query($con, $sql);
    $escrever = mysqli_fetch_array($res);
    
    $palavras = explode(" ", $escrever["nome"]);
    $quantidade = count($palavras)-1;
    
    if(mysqli_num_rows($res) == 1){
        $_SESSION["nomeUsuario"] = $palavras[0]." ".$palavras[$quantidade];
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $senha;
        switch ($escrever["tipo"]){
            case 1:
                header("location: ..\View\principal.php");
                break;
            case 2:
                echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
                break;
        }
    }
    else{
        unset($_SESSION["nomeUsuario"]);
        unset($_SESSION["usuario"]);
        unset($_SESSION["senha"]);
        setcookie("erro", "Usuário ou senha incorretos", time()+1, "/");
        header("location: ..\View\login.php");
    }