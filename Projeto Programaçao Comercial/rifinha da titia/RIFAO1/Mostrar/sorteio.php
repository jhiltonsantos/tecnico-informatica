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
    
    
</style>

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
    
    
        <a href="AdmMain.php">Retornar</a>
</div>
    <?php
    include ("../Controle/conectbd.php");
    $conect = conexao();
    
    $adcrifa = mysqli_query($conect, "SELECT * FROM rifa WHERE status != 'Finalizado';");
    $arrayrifa = mysqli_fetch_array($adcrifa);
    
    
    ?>
    
    <div class="w3-container">
        <center><h2>Cadastrar Rifa</h2></center>
        <form method="post" action="../Controle/criar_rifa.php">
        <center> <table class="w3-table-all" style="width: 700px;">
    <thead>
    <thead><th class="w3-white">Dados da Rifa</th></thead>
      <tr class="w3-red">
          
        <th>Título da Rifa</th>
        <th>Prêmio</th>
        <th>Valor</th>
      </tr>
    </thead>
    <tr>
        <td><input type="text" name="nome_rifa"></td>
      <td><input type="text" name="premio"></td>
      <td><input type="text" name="valor"></td>
    </tr>
    <tr class="w3-red">
        <th>Data de Início</th>
        <th>Data Prevista de Sorteio</th>
        <th>Data de Sorteio</th>
      </tr>
      <tr>
      <td><input type="date" name="dt_inicio"></td>
      <td><input type="date" name="dt_prev"></td>
      <td><input type="text" name="nome_rifa" disabled></td>
    </tr>
    
            </table>
            <table class="w3-table-all" style="width: 700px;">
                <thead style="position: relative; top: -50px;"><th class="w3-white" style="position: relative; top: -71px;"><center>Descrição</center></th></thead>
    <textarea name="desc" rows="5" cols="77" style="position: relative; top: 100px;">
        
    </textarea>
            </table>
        </center>
            <center><button class='w3-btn w3-green' style='height: 40px; width: 100px; position: relative; top: 80px;'>Salvar</button></center>
        </form>
    </div>

</body>
</html>