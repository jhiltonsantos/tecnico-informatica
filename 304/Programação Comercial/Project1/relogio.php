<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class relogio{
            var $peso;
            var $marca;
            var $valor;
            
            function mostrarhora(){
                setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
                date_default_timezone_set( 'America/Sao_Paulo' );
                echo "Hora atual:" .strftime( '%H:%M', strtotime('now') );
        }
            function ajustarhora(){
                
            }
        }
        ?>
    </body>
</html>
