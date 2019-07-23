<html>
<title>Confirmar pontos</title>
<head>

</head>
<body>
	<?php
        session_start();
         
        
        include './conectbd.php';
        $conecta = conexao();
        
	$pontos = $_GET['numeros'];
        $cod = $_GET['cod'];
        
	$pontos = str_replace(",,","",$pontos);
	$Nstring = array_map('intval', explode(',',$pontos));
	for($i=0;$i<count($Nstring);$i++){
		if($Nstring[$i]== "" || $Nstring[$i] == null){
			unset($Nstring[$i]);
		}
	}
        
        $format = "int";
        $format2 = "float";
        settype($cod, $format);
        $conta = count($Nstring);
        for($i=0;$i<$conta;$i++){
            
            
           $insere = mysqli_query($conecta, "insert into Sorteio values (default, default, default, null, null, default, '".$_SESSION['usuario']."',".(int)$Nstring[$i].",".(int)$cod.");");
           echo mysqli_error($conecta);
                   }
        
        /*foreach ($Nstring as $ponto) {
     $insere = mysqli_query($conecta, "insert into Sorteio values (default, default, default, null, null, default, '".$usuario."',".$ponto.",".$cod.");");
           echo (int)$Nstring.'<br>';
           
           
}*/
        
        header("Location: ../Mostrar/cliente.php");

	?>
</body>
</html>