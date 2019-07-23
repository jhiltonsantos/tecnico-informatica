<?php

if(!function_exists('protectfunc')){
            function protectfunc(){
                if (!isset($_SESSION))
                    session_start ();
                
                if(!isset($_SESSION['usuario']) || is_null($_SESSION['usuario']) || $_SESSION['acesso'] == 1|| is_null($_SESSION['acesso']) ){
                    header("location: ../Mostrar/login.php");
                }
            } 
        }

if(!function_exists('protectfunc2')){
            function protectfunc2(){
                if (!isset($_SESSION))
                    session_start ();
                
                if(!isset($_SESSION['usuario']) || is_null($_SESSION['usuario']) || $_SESSION['acesso'] == 1 || is_null($_SESSION['acesso']) ){
                    header("location: ../Mostrar/login.php");
                }
            } 
        }
?>