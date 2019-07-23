<?php
    include_once 'C:\xampp\htdocs\Controlador_Despesas\Controller\valida_sessao.php';
    class limpa_cpf{

        function limpaCPF_CNPJ($valor){
            $valor = trim($valor);
            $valor = str_replace(".", "", $valor);
            $valor = str_replace(",", "", $valor);
            $valor = str_replace("-", "", $valor);
            $valor = str_replace("/", "", $valor);
            return $valor;
        }
    }