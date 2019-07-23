<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once 'validaCpf.php';
        include_once 'limpaCPF.php';
        include_once 'conexao.php';
        
        $valido = new valida_cpf();
        $limpo = new limpa_cpf();
        $erro =  0;
        
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $casa = $_POST["casa"];
        $idade = $_POST["idade"];
        $usuario = $_POST["usuario"];
        $passaword = $_POST["password"];
        $confirma_senha = $_POST["confirma_senha"];

        if($valido->validaCPF($limpo->limpaCPF_CNPJ($cpf)) != TRUE){
            $deu_certo = 'CPF Inválido!';
            setcookie("valido", $deu_certo, time() + 1, "/");
            setcookie("corValido", "red", time() + 1, "/");
            header("location: ..\View\cadastra_cliente.php");
            $erro = 1;
        }
        
        if(!($passaword == $confirma_senha)){
            $deu_certo = 'As SENHAS não batem!';
            setcookie("corValido", "red", time() + 1, "/");
            setcookie("valido", $deu_certo, time() + 1, "/");
            header("location: ..\View\cadastra_cliente.php");
            $erro = 1;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $deu_certo = 'Insira um EMAIL válido!';
           $erro = 1;
           setcookie("corValido", "red", time() + 1, "/");
           setcookie("valido", $deu_certo, time() + 1, "/");
           header("location: ..\View\cadastra_cliente.php");
        }
        
        if($erro == 0){
            
            $sql1 = "INSERT INTO cliente(nome, telefone_C, email_Cliente, bairro, rua, numero_Cs, idade) ";
            $sql1 .="VALUES ('$nome','$telefone', '$email', '$bairro', '$rua', '$casa', '$idade')";
            
            $res1 = mysqli_query($con, $sql1);
            
            $sql2 = "INSERT INTO usuario(login, nome, senha, email, tipo) ";
            $sql2 .= "VALUES ('$usuario', '$nome', '$passaword', '$email', '2')";
            
            $res2 = mysqli_query($con, $sql2);
            
            if($res1 && $res2){
                $deu_certo = 'Cliente Cadastrado!';
                setcookie("corValido", "green", time() + 1, "/");
                setcookie("valido", $deu_certo, time() + 1, "/");
                header("location: ..\View\cadastra_cliente.php");
            }
            else {
                $deu_certo = 'Erro ao Inserir!';
                $erro = 1;
                setcookie("corValido", "red", time() + 1, "/");
                setcookie("valido", $deu_certo, time() + 1, "/");
                header("location: ..\View\cadastra_cliente.php");
            }
        }
    }