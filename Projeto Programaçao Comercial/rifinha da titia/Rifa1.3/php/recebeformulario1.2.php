<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
        <?php
            $senha = isset($_POST['senha'])?$_POST['senha']:"";
            $csenha = isset($_POST['csenha'])?$_POST['csenha']:"";
            $user = isset($_POST['user'])?$_POST['user']:"";
            $nomecompleto = isset($_POST['nomecompleto'])?$_POST['nomecompleto']:"";
            $cpf = isset($_POST['cpf'])?$_POST['cpf']:"";
            $rua = isset($_POST['rua'])?$_POST['rua']:"";
            $numeroC = isset($_POST['numero'])?$_POST['numero']:"";
            $bairro = isset($_POST['bairro'])?$_POST['bairro']:"";
            $cep = isset($_POST['cep'])?$_POST['cep']:"";
            $cidade = isset($_POST['cidade'])?$_POST['cidade']:"";
          $uf = isset($_POST['uf'])?$_POST['uf']:"";
            $email = isset($_POST['email'])?$_POST['email']:"";
            $complemento = isset($_POST['complemento'])?$_POST['complemento']:"";
             $telwp = isset($_POST['telefonewpp'])?$_POST['telefonewpp']:"";
            $tel2 = isset($_POST['tel2'])?$_POST['tel2']:"";
            $data = isset($_POST['data'])?$_POST['data']:"";
	
            //cookies
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
				header("Location: formulario1.php?erro1");
				
			}else{
				return true;
			}
			}
            validaCpf($cpf);
            function confirmasenha($senha, $csenha){
                if($senha!=$csenha){
					header("Location: formulario1.php?erro2");
                                    
                }else{
                    return true;
                  }
            }            
            confirmasenha($senha, $csenha);
        ?>
    </body>
</html>
