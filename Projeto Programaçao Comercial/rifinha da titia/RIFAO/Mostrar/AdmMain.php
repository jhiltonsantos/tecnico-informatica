<!DOCTYPE html>
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
    
    
</style>

<body>
    
    <?php
    if(isset($_GET['alterado'])){
        echo "<script>alert('Cadastro Alterado!');</script>";
    }
    if(isset($_GET['deleta'])){
        echo "<script>alert('Rifa Não Finalizada! Exclusão Cancelada!');</script>";
    }
    if(isset($_GET['apagado'])){
        echo "<script>alert('Apagado com Sucesso!');</script>";
    }
    if(isset($_GET['rifaexiste'])){
        echo "<script>alert('Há Rifa em Andamento! Criação Impossibilitada!');</script>";
    }
    
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
    <div class="w3-container">
  <h2>Pontos Confirmados</h2>
    <p></p>

  <p></p>

  <table class="w3-table-all">
    <thead>
      <tr class="w3-pale-green">
        <th>Usuario</th>
        <th>Rifa</th>
        <th>Numero</th>
        <th>Código do Sorteio</th>
        <th>Status</th>
        <th>Data da Compra</th>
        <th>Hora da Compra</th>
        <th>Data do Pagamento</th>
        <th>Hora do Pagamento</th>
      </tr>
    </thead>
    
    <?php
    
    include ("../Controle/conectbd.php");
    
    $conect = conexao();
    
    
    $procurasorteio = mysqli_query($conect, "Select * from sorteio order by Numero;");
    
    $contasorteio = mysqli_num_rows($procurasorteio);
    
    if($contasorteio>0){
        while ($arraysorteio = mysqli_fetch_array($procurasorteio)){
            echo '<tr>'
            . '<td>'.$arraysorteio['usuario'].'</td>'
                    . '<td>'.$arraysorteio['rifa'].'</td>'
                    . '<td>'.$arraysorteio['Numero'].'</td>'
                    . '<td>'.$arraysorteio['cod_sorteio'].'</td>'
                    . '<td>'.$arraysorteio['status'].'</td>'
                    . '<td>'.$arraysorteio['data_compra'].'</td>'
                    . '<td>'.$arraysorteio['hora_compra'].'</td>'
                    . '<td>'.$arraysorteio['data_pagamento'].'</td>'
                    . '<td>'.$arraysorteio['hora_pagamento'].'</td></tr>';
        }
    }else{
        echo '<tr><th>Nenhum Ponto Comprado</th></tr></table>';
    }
    
    ?>
  </table>
</div>

<!--<footer>&copy; jorgebatista.com.br</footer>-->
</body>
</html>