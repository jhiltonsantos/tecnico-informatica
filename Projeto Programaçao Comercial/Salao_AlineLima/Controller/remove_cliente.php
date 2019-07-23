<?php
    
    include_once '..\Controller\conexao.php';

    $cod = filter_input(INPUT_POST, "codigo");
    
    $res = mysqli_query($con, "DELETE FROM cliente WHERE id_Cliente = '$cod'");
    
    if($res){
        $deu_certo = 'Cliente Removido!';
        setcookie("corValido", "green", time() + 1, "/");
        setcookie("valido", $deu_certo, time() + 1, "/");
        header("location: ..\View\apaga_cliente.php");
    }
    else {
        $deu_certo = 'Erro ao Apagar!';
        $erro = 1;
        setcookie("corValido", "red", time() + 1, "/");
        setcookie("valido", $deu_certo, time() + 1, "/");
        header("location: ..\View\apaga_cliente.php");
    }
