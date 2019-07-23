<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmar Status</title>
        <link href="style.css" rel="stylesheet">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    
     <style>
        #tabela{
            border-radius: 5px;
            background-color: white;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px #333;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: white;
            color: black;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        tr:hover {background-color: #c3c3c4}
        #aceitar {
            background-color: green;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #rejeitar {
            background-color: red;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #sair {
          
            border: none;
            color: black;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
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
    
    </style>
    
     <body>
         <?php
         if(isset($_GET['confirmado'])){
           echo "<script>alert('Pagamento Confirmado!');</script>";
                }
         ?>
         <header>
        <div id="caixa_usuario">
            
        </div>
    </header>
        
<div class="ul">
    
    <a href="../Mostrar/AdmMain.php">Home</a>

    <div class="adm">
        <button class="dropbtn">Gerência</button>
            <div class="dropdown-content">
                <a href="confirmar_pg.php">Verificar Números Solicitados</a> 
                <a href="../Mostrar/seleciona_cliente.php">Verificar Cliente</a> 
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
         
         <div class="w3-container">
  <h2>Confirmação de Pagamento</h2>
    
         <table class="w3-table-all" border=1>
    <thead>
      <tr class="w3-red">
        <th style="width: 150px;">Usuario</th>
        <th style="width: 20px;">Rifa</th>
        <th style="width: 20px;">Numero</th>
        <th style="width: 20px;">Código do Sorteio</th>
        <th><center>Status</center></th>
        <th>Data da Compra</th>
        <th>Hora da Compra</th>
        <th>Data do Pagamento</th>
        <th>Hora do Pagamento</th>
        <th></th>
      </tr>
    </thead>
        <?php
        
        include ("./conectbd.php");
        $conect = conexao();
        
        
        $pgsorteio = mysqli_query($conect, "select * from Sorteio where data_pagamento is null order by data_compra;");
        $contapgsorteio = mysqli_num_rows($pgsorteio);
        
        if($contapgsorteio>0){
            while ($arraypgsorteio = mysqli_fetch_array($pgsorteio)){
                echo '<form method="POST" action="pg_confirma.php">';
                echo '<tr>';
                echo '<td><input class="w3-input w3-animate-input" type="text" name="usuario" value="'.$arraypgsorteio['usuario'].'" style="border:0px;" readonly="true"></td>'
                . '<td><input class="w3-input w3-animate-input" type="text" name="rifa" value="'.$arraypgsorteio['rifa'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="numero" value="'.$arraypgsorteio['Numero'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="cod_sorteio" value="'.$arraypgsorteio['cod_sorteio'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arraypgsorteio['status'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="data_compra" value="'.$arraypgsorteio['data_compra'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="hora_compra" value="'.$arraypgsorteio['hora_compra'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="data_pagamento" value="'.$arraypgsorteio['data_pagamento'].'" style="border:0px;" readonly="true"></td>'
                        . '<td><input class="w3-input w3-animate-input" type="text" name="hora_paga" value="'.$arraypgsorteio['hora_pagamento'].'" style="border:0px;" readonly="true"></td>'
                        . '<td>    <center><button class="w3-btn w3-blue">OK</button></center></td></tr>';
                echo '</form>';
            }
        }else{
            echo '</table>';
            echo '<center><h2>Nenhum Ponto À Confirmar</h2></center>';
        }
           
        ?>
         </table>
         </div>
    </body>
</html>
