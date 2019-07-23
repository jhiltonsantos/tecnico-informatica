<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <title>Sorteio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>    
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
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<body>
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
    <th></th>
  </tr>
  
  <?php
  include ("../Controle/conectbd.php");
  $conect = conexao();
  
  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Em Andamento';");
  $conta = mysqli_num_rows($rifa);
  if($conta>0){
  while ($arrayrifa = mysqli_fetch_array($rifa)){
      echo '<form method="POST" action="../Mostrar/pontos.php">';
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="number" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="date" name="data" value="'.$arrayrifa['data_inicio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['data_prev_sorteio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><center><button class="w3-btn w3-blue">Participar</button></td>';
      
      echo '</form>';
  }}else{
      echo '</table>';
      echo '<center><h2>Nenhuma Rifa em Andamento</h2></center>';
  }
  ?>
  
  
</table>
    <br>
    <center><h2>Rifas Finalizadas</h2></center>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquise uma Rifa" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Titulo da Rifa</th>
    <th>Código da Rifa</th>
    <th>Premio</th>
    <th>Valor</th>
    <th>Status</th>
    <th>Data de Finalização</th>
    <th>Ganhador</th>
   
  </tr>
  
  <?php
  
  
  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Finalizado';");
  $conta = mysqli_num_rows($rifa);
  if($conta>0){
  while ($arrayrifa = mysqli_fetch_array($rifa)){
     
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="number" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="date" name="data" value="'.$arrayrifa['data_sorteio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['ganhador'].'" style="border:0px;" readonly="true"></td>';
      
     
  }}else{
      echo '</table>';
      echo '<center><h2>Nenhuma Rifa Finalizada</h2></center>';
  }
  ?>
  
  
</table>

<!--<footer>&copy; jorgebatista.com.br</footer>-->
</body>
</html>