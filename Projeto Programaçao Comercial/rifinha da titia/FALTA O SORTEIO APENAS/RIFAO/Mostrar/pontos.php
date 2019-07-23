<!DOCTYPE html>

<html>
   
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type='text/javascript' src='jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src="javascript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body{
                background-color: #FEFBD0;
                font-family: 'PT+Sans+Narrow', sans-serif;
                
            }
            #table {
                
                float: center;
                text-align: center;
                margin: auto;
                border-spacing: 10px;
                width: 30%;
                height: 40vh;
                background-color: #FDCFB7;
                margin-left: 20vh;
                margin-top:5vh;
               border-radius: 10px;
                
            }
            #bt {
               text-align: center;
               background-color: #65B98D;
               border-radius: 20%;
               width: 9%;
               height: 5vh;            
                             
            }
            #bt:hover {
               background-color: blue;                
            }
            #bt:focus {
                background-color: red;
            }
           .bt1 {
               
               background-color: #5EB955;
               border-radius: 20%;
               width: 100px;
               height: 13vh;
               
                             
            }
            .bt1:hover {
               background-color: blue;                
            }
            
            .un{    
                position: absolute;
                left: 90vh;
                top: 45vh;                
            }
            body {
        margin: 0;
        background-color: #3C9B5F}
    
    img {
        max-width: 100%;
        height: auto;
    }
    
    /*Menu*/
    
    .ul {
        overflow: hidden;
        background-color: #0A4783;
        font-family: Arial;
        border-color: #0C6121;
    }
    
    .ul a {
        float: left;
        font-size: 16px;
        color: #3C9B5F;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .adm {
        float: left;
        overflow: hidden;
    }

    .adm .dropbtn {
        font-size: 16px;    
        border: none;
        outline: none;
        color: #3C9B5F;
        padding: 14px 16px;
        background-color: inherit;
    }

    .ul a:hover, .adm:hover .dropbtn {
        background-color: black;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(104,145,162);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: #3C9B5F;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    .dropdown-content a:hover {
        background-color: black;
    }

    .adm:hover .dropdown-content {
        display: block;
    }
    
    header {
        background-color: #F1F1F1;
        text-align: center;
        padding: 20px;
    }
    
    footer {
        padding: 1em;
        color: white;
        background-color: #333;
        clear: left;
        text-align: center;
    }
    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 90%;
  height: 30px;
  border: 1px solid #ddd;
  font-size: 18px;
  position: relative;
  top: 0px;
  left: 50px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
            
        </style>
        <script src="jquery-3.3.1.js"></script>

        <script>
           var arraio = [];
function myFunction(num) {
    
    var i = 0;
    while(arraio[i] !== undefined){
        if(num === arraio[i]){
            var b = i;
            while(arraio[b] !== undefined){
                arraio[b] = arraio[b+1];
                b++;
            }
            document.getElementById("demo").innerHTML = arraio;
            document.getElementById("demo").innerHTML += " " ;
            system.pause;
        }
        i++;
    }
    arraio[i] = num;
    document.getElementById("demo").innerHTML = arraio;
    document.getElementById("demo").innerHTML += " " ;
    
	}

<?PHP

    for($i=0;$i<12;$i++){
        printf('$(document).ready(function(){
			$("#a'.$i.'").click(function(){
			$("#baixar'.$i.'").slideToggle("slow");
			});
	});');
    }
    
  include ("../Controle/conectbd.php");
  $conect = conexao();
  
  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Em Andamento';");
  
  while ($row = mysqli_fetch_array($rifa, MYSQLI_NUM)) {
      $cod = $row[0];
  }
?>


function mandar(){
    document.location.href = "../Controle/servidor.php?numeros=" +arraio+"&cod="+<?php echo $cod; ?>;
}
  
        
</script>
    </head>
    <body>
         <?php
    ?>
       <header>
        <div id="caixa_usuario">
            
        </div>
    </header>
        
<header>
        <div id="caixa_usuario">
            
        </div>
    </header>
        
<div class="ul">
    
    <a href="cliente.php">Home</a>
    

    <div class="adm">
        <button class="dropbtn">Verificar Pagamento</button>
            <div class="dropdown-content">
                <a href="verificar_pagamento.php">Verificar</a>
            </div>   
    </div>
    
    
        <a href="..\Controle\sairsessão.php">Sair</a>
</div>
        <center><h2>Rifa em Andamento</h2></center>
    
<table id="myTable">
  <tr class="header">
    <th>Titulo da Rifa</th>
    <th>Código da Rifa</th>
    <th>Premio</th>
    <th>Valor</th>
    <th>Status</th>
    <th>Data de Início</th>
    <th>Previsão de Sorteio</th>
    
  </tr>
  
  <?php
  
  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Em Andamento';");
  
  $conta = mysqli_num_rows($rifa);
  if($conta>0){
  while ($arrayrifa = mysqli_fetch_array($rifa)){
      echo '<form method="POST" action="pontos.php">';
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="number" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="date" name="data" value="'.$arrayrifa['data_inicio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['data_prev_sorteio'].'" style="border:0px;" readonly="true"></td>';
      
      echo '</form>';
  }}else{
      echo '</table>';
      echo '<center><h2>Nenhuma Rifa em Andamento</h2></center>';
  }
  ?>
  
  
</table>
        <?php

        echo '<table id="table">';
            for ($i=0; $i<12; $i++){
                echo $i%4 === 0 && $i !== 0 ?  "<tr>" : "";
                
                
                $numa = $i*100+1;
                $numo = $i*100+100;
                echo '<td><div id="a'.$i.'" class="bt1"><br>'.$numa.'<br> -<br> '.$numo.'</div>';
               
                echo "<div id='baixar$i' class='un' style='display : none'>";
                for ($z=0; $z<100; $z++){
                    $zi = $z+$numa;
                    echo "<button id='bt' class='".$zi."' onclick='myFunction($zi)' onclick='recebenum($zi)'>".$zi."</button>";
	
					if($zi%10===0)
                        echo "<br>";
                    echo "\n";
                }
                echo"</div></td>";
            }
        echo '<tr><td>
		<button onclick="mandar()">Enviar</button></td></table>';
        ?>
        
		<div id="num">
             <p id="demo">
				</p>
        </div>
   
    </body>
</html>

