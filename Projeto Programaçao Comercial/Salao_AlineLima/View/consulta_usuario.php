<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Consulta Usuário</title>
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
            $res = mysqli_query($con, "SELECT * FROM usuario");
            
            echo "<table><tr>"
                    . "<th>Nome</th>"
                    . "<th>Login</th>"
                     . "<th>Senha</th>"
                     . "<th>Email</th>"
                     . "<th>Tipo</th>"
                    . "</tr>";
            
            while($escrever=mysqli_fetch_array($res)){
                echo    "<tr><td>" . $escrever['nome'] 
                        . "</td><td>" . $escrever['login']
                        . "</td><td>" . $escrever['senha'] 
                        . "</td><td>" . $escrever['email'] 
                        . "</td><td>" . $escrever['tipo']
                        . "</td></tr>";

            }
            
            echo "</table>"; 

            $con-> close();
            
        ?>
        </div>
    </body>
</html>