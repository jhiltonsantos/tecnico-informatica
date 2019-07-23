<?php 

function conexao(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bd = 'rifa';
        
        $mysqli = new mysqli($host, $usuario, $senha, $bd);
        if($mysqli->connect_errno){
            echo 'Falha na Conexão: ('.$mysqli->connect_errno.')'.$mysqli->connect_error;
        }
         return $mysqli;   
        }
        
if(!function_exists('protect')){

            function protect(){
                if (!isset($_SESSION))
                    session_start ();
                
                if(!isset($_SESSION['usuario']) || is_null($_SESSION['usuario'])){
                    header("location: ../Mostrar/login.php");
                    
                     
                }
                $conexao = conexao();
                
            } 
        }
?>