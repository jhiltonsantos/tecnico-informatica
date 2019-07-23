<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <title>Administrador</title>
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
    
    * {
  box-sizing: border-box;
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
    
    
    <div class="adm">
        <button class="dropbtn">Sorteio</button>
            <div class="dropdown-content">
                 <a href="rifa_altera.php">Alterar Rifa</a>
                <a href="apagar_rifa.php">Apagar Rifa</a>
                <a href="..\Controle\realiza_sorteio.php">Realizar Sorteio</a>
               
            </div>
    </div>
    
    
    <a href="sorteio.php">Retornar</a>
</div>
    <br>
<center><h2>Apagar Rifa</h2></center>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquise a Rifa Que Deseja Apagar" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Titulo da Rifa</th>
    <th>Código da Rifa</th>
    <th>Premio</th>
    <th>Valor</th>
    <th>Status</th>
    <th>Data de Finalização</th>
    <th>Ganhador</th>
    <th></th>
  </tr>
  
  <?php
  include ("../Controle/conectbd.php");
  $conect = conexao();
  
  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Finalizado';");
  
  while ($arrayrifa = mysqli_fetch_array($rifa)){
      echo '<form method="POST" action="../Controle/remove_rifa.php">';
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="number" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="date" name="data" value="'.$arrayrifa['data_sorteio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['ganhador'].'" style="border:0px;" readonly="true"></td>'
              . '<td><center><button class="w3-btn w3-blue">Deletar</button></td>';
      
      echo '</form>';
  }
  ?>
  
  
</table>

    
    
</body></html>