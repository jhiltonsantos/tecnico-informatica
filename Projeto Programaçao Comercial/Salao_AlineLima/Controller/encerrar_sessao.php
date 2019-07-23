<?php

    session_start();
    
    unset($_SESSION["nomeUsuario"]);
    unset($_SESSION["usuario"]);
    unset($_SESSION["senha"]);
    
    header("location: ..\View\login.php");