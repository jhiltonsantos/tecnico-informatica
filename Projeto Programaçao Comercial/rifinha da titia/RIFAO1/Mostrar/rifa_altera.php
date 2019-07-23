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
                <a href="..\Controle\realiza_sorteio.php">Realizar Sorteio</a>
                <a href="apagar_rifa.php">Apagar Rifa</a>
                
            </div>
    </div>
    
    
    <a href="sorteio.php">Retornar</a>
</div>
    <?php
    include ("../Controle/conectbd.php");
    $conect = conexao();
    
    $adcrifa = mysqli_query($conect, "SELECT * FROM rifa WHERE status = 'Em Andamento';");
    $arrayrifa = mysqli_fetch_array($adcrifa);
    
    
    ?>
    
    <div class="w3-container">
        <center><h2>Alterar Rifa</h2></center>
        <form method="post" action="../Controle/alterarifa.php">
        <center> <table class="w3-table-all" style="width: 700px;">
    <thead>
    <thead><th class="w3-white">Dados da Rifa</th></thead>
      <tr class="w3-red">
        <th>Código da Rifa</th>
        <th>Título da Rifa</th>
        <th>Prêmio</th>
       
      </tr>
    </thead>
    <tr>
        <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>';?>
    </tr>
    <tr class="w3-red">
        <th>Data de Início</th>
        <th>Data Prevista de Sorteio</th>
        <th>Data de Sorteio</th>
      </tr>
      <tr>
      <?php echo'<td><input class="w3-input w3-animate-input" type="date" name="inicio" value="'.$arrayrifa['data_inicio'].'" style="border:0px;"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="date" name="previsto" value="'.$arrayrifa['data_prev_sorteio'].'" style="border:0px;" readonly="true"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="date" name="sorteio" value="'.$arrayrifa['data_sorteio'].'" style="border:0px;"></td>';?>
    </tr>
    <tr class="w3-red">
        <th>Valor</th>
        <th>Status</th>
        <th>Ganhador</th>
      </tr>
      <tr>
      <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;"></td>';?>
      <?php echo'<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['ganhador'].'" style="border:0px;"></td>';?>
    </tr>

    
            </table>
            <table class="w3-table-all" style="width: 700px;">
                <thead style="position: relative; top: -50px;"><th class="w3-white" style="position: relative; top: -71px;"><center>Descrição</center></th></thead>
    <textarea name="desc" rows="5" cols="77" style="position: relative; top: 100px;">
        <?php echo $arrayrifa['descricao']?>
    </textarea>
            </table>
        </center>
            <center><button class='w3-btn w3-green' style='height: 40px; width: 100px; position: relative; top: 65px;'>Salvar</button></center>
        </form>
    </div>

</body>
</html>