<?php
    
    include_once './conectbd.php';
    $conect = conexao();


    $nome = filter_input(INPUT_POST, "nome_cliente");
    
    $query = mysqli_query($conect, "SELECT * FROM Usuario WHERE nome_completo LIKE concat('%','$nome','%')");

    if($query){
        $pass = 'Cliente Selecionado!';
       echo "<br><table><tr>"
                    . "<th>Usuario</th>"
                    . "<th>Senha</th>"
                     . "<th>Nome Completo</th>"
                     . "<th>Data de Nascimento</th>"
                     . "<th>Sexo</th>"
                     . "<th>Telefone Whatsapp</th>"
                     . "<th>Telefone Opcional</th>"
                     . "<th>CPF</th>"
                     . "<th>E-mail</th>"
                     . "<th>Bairro</th>"
                     . "<th>Rua</th>"
                     . "<th>Completo</th>"
                     . "<th>CEP</th>"
                     . "<th>UF</th>"
                     . "<th>Nº da Casa</th>"
                     . "<th>Idade</th>"
                    . "</tr>";
            
            while($mostrar = mysqli_fetch_array($query)){
                echo    "<tr><td>" . $mostrar['usuario'] 
                        . "</td><td>" . $mostrar['senha']
                        . "</td><td>" . $mostrar['nome_completo'] 
                        . "</td><td>" . $mostrar['telefone_wpp'] 
                        . "</td><td>" . $mostrar['email'] 
                        . "</td><td>" . $mostrar['CPF'] 
                        . "</td><td>" . $mostrar['Rua'] 
                        . "</td><td>" . $mostrar['Numero'] 
                        . "</td><td>" . $mostrar['Complemento'] 
                        . "</td><td>" . $mostrar['Bairro'] 
                        . "</td><td>" . $mostrar['CEP'] 
                        . "</td><td>" . $mostrar['Cidade']
                        . "</td><td>" . $mostrar['UF']
                        . "</td><td>" . $mostrar['data_nascimento']
                        . "</td><td>" . $mostrar['sexo']    
                        . "</td></tr>";

            }
            
            echo "</table>"; 
    }
    else {
        $pass = 'Erro ao selecionar!';
        echo $pass;
        
        //header("location: ..\seleciona_cliente.php");
    }


?>