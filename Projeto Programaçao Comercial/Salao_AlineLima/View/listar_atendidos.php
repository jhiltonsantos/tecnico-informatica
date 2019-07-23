<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Lista de Espera</title>
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
            include_once '..\Controller\conexao.php';
            $res = mysqli_query($con, "SELECT * FROM solicitacao WHERE status = 'A'");
            
            echo "<table><tr>"
                    . "<th>ID Solicitação</th>"
                    . "<th>ID Procedimento</th>"
                    . "<th>Cliente</th>"
                    . "<th>Dia</th>"
                    . "<th>Hora</th>"
                    . "<th><a href='http://localhost/Salao_AlineLima/View/principal.php'><button id='sair'>Sair</button></a></th>"
                    . "</tr>";
            
            while($escrever=mysqli_fetch_array($res)){
                echo    "<tr><td>" . $escrever['id_solicitacao'] 
                        . "</td><td>" . $escrever['id_procedimento']
                        . "</td><td>" . $escrever['usuario'] 
                        . "</td><td> " . $escrever['dia_solicitado']
                        . "</td><td> " . $escrever['hora_solicitada']
                        . "</td></tr>";

            }
            
            echo "</table>"; 

            $con-> close();
            
        ?>
        </div>
    </body>
</html>
