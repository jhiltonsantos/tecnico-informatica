<html>
    <head>
        <meta charset="UTF-8">
        <title>Recebe Formulario</title>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    </head>
    <body>
	
        <?php
            //Conexão BD
            include_once './conectbd.php';
            $conect = conexao();

            //Recebendo Formulário
            $user = $_POST['user'];
            $senha = $_POST['senha'];
            
            $csenha = $_POST['confirmasenha'];
            $nomecompleto = $_POST['nomecompleto'];
            $cpf = $_POST['cpf'];
            $data = $_POST['data'];
            $sexo = $_POST['sexo'];

            $rua = $_POST['rua'];
            $numeroC = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $complemento = $_POST['complemento'];
            $cep = $_POST['cep'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
            $telwp = $_POST['telefonewpp'];
            $tel2 = $_POST['tel2'];
            $email = $_POST['email'];
            

	
            //Cookies
            setcookie("user",$user);
            setcookie("nomecompleto",$nomecompleto);
            setcookie("rua", $rua);
            setcookie("numero", $numeroC);
            setcookie("bairro", $bairro);
            setcookie("complemento", $complemento);
            setcookie("cep", $cep);
            setcookie("cidade", $cidade);
            setcookie("uf", $uf);
            setcookie("telefonewpp", $telwp);
            setcookie("tel2", $tel2);
            setcookie("email", $email);
            setcookie("data", $data);
            
        /*
			function validaCpf($cpf){
			$cpf = preg_replace('/[^0-9]/','',$cpf);
			$digitoA = 0;
			$digitoB = 0;
			
			for($i = 0, $x = 10; $i <=8; $i++, $x--){
				$digitoA += $cpf[$i] * $x;
			    }
			
            for($i = 0, $x = 11; $i <=9; $i++, $x--){
				    if(str_repeat($i, 11) == $cpf){
					   return false;
				    }   
				$digitoB += $cpf[$i] * $x;
			    }
			
            $somaA = (($digitoA%11) < 2) ? 0 : 11-($digitoA%11);
			$somaB = (($digitoB%11) < 2) ? 0 : 11-($digitoB%11);
		
			if($somaA != $cpf[9] || $somaB != $cpf[10]){
				header("Location: ..\Mostrar\formulario.php?erro1");
			    }
            else{
				return true;
			    }
			}validaCpf($cpf);
            
                        
            function confirmasenha($senha, $csenha){
                if($senha !== $csenha){
					header("Location: ..\Mostrar\formulario.php?erro2");
                                    
                }else{
                    return true;
                  }
            }confirmasenha($senha, $csenha);
            
            if ($senha == $senhaConfirma) {
                return true;
            } else {
                header("Location: ..\Mostrar\formulario.php");;
            }
        

*/
            if($senha==$csenha){
                $sqlf = "INSERT INTO Usuario(usuario, senha, nome_completo, telefone_wpp, telefone_2, email, CPF, Rua, Numero, Complemento, Bairro, CEP, Cidade, UF, data_nascimento, sexo)";
                $sqlf .= "VALUES ('$user', '$senha', '$nomecompleto', '$telwp', '$tel2', '$email', '$cpf', '$rua', '$numeroC', '$complemento', '$bairro', '$cep', '$cidade', '$uf', '$data', '$sexo')";
                
                $resf = mysqli_query($conect, $sqlf);
                
                if($resf){
                    $pass = 'Cliente Cadastrado!';
                    header("location: ..\Mostrar\login.php");
                }
                else {
                    $pass = 'Erro ao Inserir!';
                    header("location: ..\Mostrar\formulario.php");
            }
            
            }




        ?>

    </body>
</html>