<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Consulta Procedimento</title>
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
    </style>
    
    <body>
        <div id="tabela"> 
        <?php
            include_once '..\Controller\conexao.php';
            $res = mysqli_query($con, "SELECT * FROM procedimento");
            
            echo "<table><tr>"
                    . "<th>ID Procedimento</th>"
                    . "<th>Título</th>"
                     . "<th>Descrição</th>"
                     . "<th>Valor</th>"
                    . "</tr>";
            
            while($escrever=mysqli_fetch_array($res)){
                echo    "<tr><td>" . $escrever['cod_Procedimento'] 
                        . "</td><td>" . $escrever['procedimento']
                        . "</td><td>" . $escrever['descricao'] 
                        . "</td><td> R$" . $escrever['valor'].",00"
                        . "</td></tr>";

            }
            
            echo "</table>"; 

            $con-> close();
            
        ?>
        </div>
    </body>
</html>