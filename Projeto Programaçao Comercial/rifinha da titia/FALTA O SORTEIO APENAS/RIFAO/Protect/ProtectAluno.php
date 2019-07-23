<?php

if(!function_exists('protectaluno')){
            function protectaluno(){
                if (!isset($_SESSION))
                    session_start ();
                
                if(!isset($_SESSION['usuario']) || is_null($_SESSION['usuario']) || $_SESSION['acesso'] == 2 || is_null($_SESSION['acesso']) ){
                    header("location: ../Mostrar/login.php");
                }
            } 
        }
        
        
?>