<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <?php
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
        ?>
    </body>
</html>
