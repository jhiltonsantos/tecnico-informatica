<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <script type="text/javascript">
            
            function FazLogin(){
                setTimeout('window.location="login.php"', 3000000000000000);
            }
            
        </script>
    </head>
    <body>
        <?php
        include ("./Funcoes.php");
            conexao();
                    
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
				return false;
			}else{
				return true;
			}
			}
            $nome_completo = isset($_GET['nome'])?$_GET['nome']:"";
            $cpf = isset($_GET['cpf'])?$_GET['cpf']:"";
			$rua = isset($_GET['rua'])?$_GET['rua']:"";
			$numeroC = isset($_GET['numero'])?$_GET['numero']:"";
			$bairro = isset($_GET['bairro'])?$_GET['bairro']:"";
			$cep = isset($_GET['cep'])?$_GET['cep']:"";
			$cidade = isset($_GET['cidade'])?$_GET['cidade']:"";
			$uf = isset($_GET['uf'])?$_GET['uf']:"";
			$email = isset($_GET['email'])?$_GET['email']:"";
			$cep = isset($_GET['cep'])?$_GET['cep']:"";
        
            $usuario = $_GET['usuario'];
            $senha = $_GET['senha'];
            $nome = $_GET['nome'];
            $cpf = $_GET['cpf'];
            $rua = $_GET['rua'];
            $numero = $_GET['numero'];
            $bairro = $_GET['bairro'];
            $complemento = $_GET['complemento'];
            $cep = $_GET['cep'];
            $cidade = $_GET['cidade'];
            $uf = $_GET['uf'];
            $telefonewpp = $_GET['telefone-wpp'];
            $telefone = $_GET['telefone'];
            $email = $_GET['email'];
            $data = $_GET['data'];
            $sexo = $_GET['sexo'];
            
            $con = conexao();
            $usuario_consulta = mysqli_query($con, 'select * from Usuario where usuario = "'.$usuario.'";');
            $conta_usuario = mysqli_num_rows($usuario_consulta);
            if($conta_usuario > 0){
                header('location: formulario.php?existe');
            }else{
            $sql = mysqli_query($con, "insert into usuario values ('".$usuario."', '".$senha."', '".$nome."', '".$telefonewpp."', '".$telefone."', '".$email."', 
'".$cpf."', '".$rua."'," .$numero.", '".$complemento."', '".$bairro."', '".$cep."', '".$cidade."', '".$uf."',
'".$data."', '".$sexo."', default);");                                     
                echo '<script>FazLogin()</script>';
                header('location: login.php?fazlogin');
            }
            
        ?>
    </body>
</html>
