<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once 'conexao.php';
        
        $procedimento = $_POST["procedimento"];
        $valor = $_POST["valor"];
        $descricao = $_POST["descricao"];
        
        $erro =  0;
        
        if(isset($_POST["descricao"]) == " "){
            $descricao = "Nenhuma descrição";
        }
        
        if($erro == 0){
            
            $sql = "INSERT INTO procedimento(procedimento, descricao, valor) ";
            $sql .="VALUES ('$procedimento', '$descricao', '$valor')";
            
            $res = mysqli_query($con, $sql);
            
            if($res){
                $deu_certo = 'Procedimento Cadastrado!';
                setcookie("corValido", "green", time() + 1, "/");
                setcookie("valido", $deu_certo, time() + 1, "/");
                header("location: ..\View\cadastra_procedimento.php");
            }
            else {
                $deu_certo = 'Erro ao Inserir!';
                $erro = 1;
                setcookie("corValido", "red", time() + 1, "/");
                setcookie("valido", $deu_certo, time() + 1, "/");
                header("location: ..\View\cadastra_procedimento.php");
            }
        }
    }