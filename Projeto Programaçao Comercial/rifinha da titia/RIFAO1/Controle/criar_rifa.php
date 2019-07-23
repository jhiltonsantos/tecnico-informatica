<html>
    <head>
        <meta charset="UTF-8">
        <title>Recebe Formulario Rifa</title>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    </head>
    <body>
	
        <?php
            
        
            //Conexão BD
            include ("./conectbd.php");
            $conect = conexao();
            //Recebendo Formulário
            $nome = $_POST['nome_rifa'];
            $descricao = $_POST['desc'];
            $premio  = $_POST['premio'];
            $dt_inicio = $_POST['dt_inicio'];
            $dt_prev = $_POST['dt_prev'];
      	    $valor = $_POST['valor']; 
            
            
 

            $select = mysqli_query($conect, "SELECT * FROM Rifa WHERE status != 'Finalizado'");
            $conta = mysqli_num_rows($select);
            
            if($conta>0){
                            header("Location: ../Mostrar/AdmMain.php?rifaexiste");

            }else{
            
            
            $inserir = "INSERT INTO Rifa VALUES (default, '$nome', '$descricao', $valor, '$premio', null, default, '$dt_inicio', '$dt_prev', null);";
                
            $query = mysqli_query($conect, $inserir);
                
            
            header("Location: ../Mostrar/AdmMain.php");

            }

        ?>

    </body>
</html>