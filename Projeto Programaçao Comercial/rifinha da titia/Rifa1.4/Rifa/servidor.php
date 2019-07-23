<?php
    $pontos= $_GET['numeros'];
     echo " ".$pontos;
     $Nstring = explode (',',$pontos);
     $contador = count($Nstring);
     for($i = 0; $i < $contador; $i++){
         if($Nstring[$i] == "" && isset($Nstring[$i]) or $Nstring[$i] == null && isset($Nstring[$i]) ){
             unset($Nstring[$i]);
         }
         echo ' '.$i;
     }
     echo '<br> '.count($Nstring);
?>
