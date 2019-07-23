<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Consulta Cliente</title>
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
            $res = mysqli_query($con, "SELECT * FROM cliente");
            
            echo "<table><tr>"
                    . "<th>ID cliente</th>"
                    . "<th>Nome</th>"
                     . "<th>Email</th>"
                     . "<th>Telefone</th>"
                     . "<th>Bairro</th>"
                     . "<th>Rua</th>"
                     . "<th>Nº da Casa</th>"
                     . "<th>Idade</th>"
                    . "</tr>";
            
            while($escrever=mysqli_fetch_array($res)){
                echo    "<tr><td>" . $escrever['id_Cliente'] 
                        . "</td><td>" . $escrever['nome']
                        . "</td><td>" . $escrever['email_Cliente'] 
                        . "</td><td>" . $escrever['telefone_C'] 
                        . "</td><td>" . $escrever['bairro'] 
                        . "</td><td>" . $escrever['rua'] 
                        . "</td><td>" . $escrever['numero_Cs'] 
                        . "</td><td>" . $escrever['idade'] 
                        . "</td></tr>";

            }
            
            echo "</table>"; 

            $con-> close();
            
        ?>
        </div>
    </body>
</html>