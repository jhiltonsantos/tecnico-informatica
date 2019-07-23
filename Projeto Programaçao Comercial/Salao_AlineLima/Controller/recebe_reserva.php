<?php
    session_start();
    include_once 'conexao.php';
    $data = $_POST["dia"];
    $hora = $_POST["horario"];
    $usuario = $_SESSION["usuario"];
    $procedimento = $_GET["procedimento"];
    $erro = 0;
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data1 = new DateTime($data.' '.$hora);
    $data2 = new DateTime(date('Y/m/d H:i:s'));
    $data2->setTimezone($fuso);
    $intervalo = $data1->diff($data2);  
    $hours1   = $data1->format('H'); 
    $minutes1 = $data1->format('i');
    $hours2   = $data2->format('H'); 
    $minutes2 = $data2->format('i');
    
    if(!($hours1 >= 8 && $hours1<=12) || !($hours1 >= 14 && $hours1<=18)){
        $deu_certo = 'Horário inválido,<br> Informe um horário dentro do horário de funcionamento!';
        setcookie("valido", $deu_certo, time() + 1, "/");
        setcookie("corValido", "red", time() + 1, "/");
        echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
        $erro = 1;
    }
    
    if($intervalo->format('%R%a') > 0){
        $deu_certo = 'Data inválida,<br> A data informada já passou!';
        setcookie("valido", $deu_certo, time() + 1, "/");
        setcookie("corValido", "red", time() + 1, "/");
        echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
        $erro = 1;
     }
    elseif ($intervalo->format('%R%a') < 0) {
        $erro = 0;
    }
    else {
        if($hours1 < $hours2){
            $deu_certo = 'Horário inválido,<br> O horário informado já passou!';
            setcookie("valido", $deu_certo, time() + 1, "/");
            setcookie("corValido", "red", time() + 1, "/");
            echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
            $erro = 1;
        }
    }
     
     if($erro == 0){
        $sql = "INSERT INTO solicitacao(id_procedimento, usuario, dia_solicitado, hora_solicitada) ";
        $sql .="VALUES ('$procedimento','$usuario', '$data', '$hora')";

        $res = mysqli_query($con, $sql);

        if($res){
            $deu_certo = 'Solicitação feita com sucesso!<br> Verifique mais tarde se sua solicitação foi aceita.';
            setcookie("corValido", "green", time() + 1, "/");
            setcookie("valido", $deu_certo, time() + 1, "/");
            echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
        }
        else {
            $deu_certo = 'Erro ao Solicitar!';
            $erro = 1;
            setcookie("corValido", "red", time() + 1, "/");
            setcookie("valido", $deu_certo, time() + 1, "/");
            echo "<script>window.location='http://localhost/Salao_AlineLima/View/reserva.php';</script>";
        }
    }