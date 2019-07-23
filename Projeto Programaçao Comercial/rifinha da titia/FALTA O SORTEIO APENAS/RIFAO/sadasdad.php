<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmar Status</title>
        <link href="style.css" rel="stylesheet">
    </head>
    
     <style>
        #tabela{
            border-radius: 5px;
            background-color: white;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px #333;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: white;
            color: black;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        tr:hover {background-color: #c3c3c4}
        #aceitar {
            background-color: green;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #rejeitar {
            background-color: red;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #sair {
          
            border: none;
            color: black;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    
     <body>
        <div id="tabela">
        <?php
            require_once ('conectbd.php');
            
            $res = mysqli_query($conecta_banco, "SELECT * FROM Rifa WHERE status = 'Pendente'");
            
            echo "<table><tr>"
                    . "<th>ID Solicitação</th>"
                    . "<th>ID Procedimento</th>"
                    . "<th>Cliente</th>"
                    . "<th>Dia</th>"
                    . "<th>Hora</th>"
                    . "<th>Aceitar</th>"
                    . "<th>Rejeitar</th>"
                    . "<th><a href='http://localhost/Autentificação/Mostrar/AdmMain.php'><button id='SAIR'>Sair</button></a></th>"
                    . "</tr>";
            
            while($escrever=mysqli_fetch_array($res)){
                echo    "<tr><td>" . $escrever['id_solicitacao'] 
                        . "</td><td>" . $escrever['id_procedimento']
                        . "</td><td>" . $escrever['usuario'] 
                        . "</td><td> " . $escrever['dia_solicitado']
                        . "</td><td> " . $escrever['hora_solicitada']
                        . "</td><td> <a href='http://localhost/Salao_AlineLima/Controller/confirmar_reserva.php?aceito=Indisponivel&id=".$escrever["id_solicitacao"]."'><button id='aceitar'>Aceitar</button></a>" 
                        . "</td><td> <a href='http://localhost/Salao_AlineLima/Controller/confirmar_reserva.php?aceito=Disponivel&id=".$escrever["id_solicitacao"]."'><button id='rejeitar'>Rejeitar</button></a>"
                        . "</td></tr>";

            }
            
            echo "</table>"; 

            $con-> close();
            
        ?>
        </div>
    </body>
</html>
