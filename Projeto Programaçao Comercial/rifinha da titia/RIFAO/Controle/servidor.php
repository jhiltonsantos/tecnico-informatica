<html>
<title>Confirmar pontos</title>
<head>

</head>
<body>
	<?php
	$pontos = $_GET['numeros'];
        $cod = $_GET['cod'];
	echo "Os numero do arraio: ".$pontos;
	$pontos = str_replace(",,","",$pontos);
	$Nstring = explode(',',$pontos);
	for($i=0;$i<count($Nstring);$i++){
		if($Nstring[$i]== "" || $Nstring[$i] == null){
			unset($Nstring[$i]);
		}
	}
        
        for($i=0;$i<count($Nstring);$i++){
            
        }
        
        echo $nome = $_POST['nome'];
        echo $cod = $_POST['cod'];
        echo $cod;
	echo "<br>Quantos elementos atualmente no arraio: ".count($Nstring);
	
	
	?>
</body>
</html>