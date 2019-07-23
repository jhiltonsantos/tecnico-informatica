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
     <?php
    include '../Controle/conectbd.php';
    protect();
    
    ?>
    <header>
        <div id="caixa_usuario">
            
        </div>
    </header>
        
<div class="ul">
    
        <a href="AdmMain.php">Home</a>

    <div class="adm">
        <button class="dropbtn">Gerência</button>
            <div class="dropdown-content">
                <a href="..\Controle\confirmar_pg.php">Verificar Números Solicitados</a> 
                <a href="seleciona_cliente.php">Verificar Cliente</a> 
            </div>
    </div>
    
    <div class="adm">
        <button class="dropbtn">Procedimentos</button>
            <div class="dropdown-content">
                <a href="sorteio.php">Criar Novo Sorteio</a>
                
            </div>
    </div>
    
    
        <a href="..\Controle\sairsessão.php">Sair</a>
</div>
    <br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisar Por Nomes" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th>Nome Completo</th>
    <th>Usuário</th>
    <th>CPF</th>
    <th>Email</th>
    <th>Telefone Whatsapp</th>
    <th></th>
  </tr>
  
  <?php
  $conect = conexao();
  
  $cliente = mysqli_query($conect, "Select * from Usuario;");
  
  while ($arraycliente = mysqli_fetch_array($cliente)){
      echo '<form method="POST" action="mostracliente.php">';
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arraycliente['nome_completo'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="usuario" value="'.$arraycliente['usuario'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="cpf" value="'.$arraycliente['CPF'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="email" value="'.$arraycliente['email'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="wpp" value="'.$arraycliente['telefone_wpp'].'" style="border:0px;" readonly="true"></td>'
              . '<td><center><button class="w3-btn w3-blue">Verificar</button></td>';
      
      echo '</form>';
  }
  ?>
  
  
</table>

    
    
</body></html>