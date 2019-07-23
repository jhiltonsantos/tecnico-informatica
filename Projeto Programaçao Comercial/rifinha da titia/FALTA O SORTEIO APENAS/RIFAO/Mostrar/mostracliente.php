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
    
    <?php
    
    $conect = conexao();
    
    $user = $_POST['usuario'];
    
    $mostracliente = mysqli_query($conect, "select * from Usuario where usuario = '".$user."';");
    $arraymostracliente = mysqli_fetch_array($mostracliente);
    ?>
    <div class="w3-container">
        <center><h2>Perfil do Usuário</h2></center>
        <form method="post" action="../Controle/alteracliente.php">
  <center><table class="w3-table-all" style="width: 960px;">
    <thead>
      <tr class="w3-pale-green">
        <th>Nome Completo</th>
        <th>Usuário</th>
        <th>Telefone Whatsapp</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tr style="height: 60px;">
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arraymostracliente['nome_completo'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="usuario" value="'.$arraymostracliente['usuario'].'" style="border:0px;" readonly="true">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="wpp" value="'.$arraymostracliente['telefone_wpp'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="fone" value="'.$arraymostracliente['telefone_2'].'" style="border:0px;">';?></td>
    </tr>
    <thead>
      <tr class="w3-pale-green">
        <th>Tipo de Usuário</th>
        <th>E-mail</th>
        <th>CPF</th>
        <th>Data de Nascimento</th>
      </tr>
    </thead>
    <tr style="height: 60px;">
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="tipo" value="'.$arraymostracliente['tipo'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="email" value="'.$arraymostracliente['email'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="cpf" value="'.$arraymostracliente['CPF'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="date" name="nascimento" value="'.$arraymostracliente['data_nascimento'].'" style="border:0px;">';?></td>
    </tr>
    <thead>
      <tr class="w3-pale-green">
        <th>Cidade</th>
        <th>Estado</th>
        <th>Bairro</th>
        <th>Rua</th>
      </tr>
    </thead>
    <tr style="height: 60px;">
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="cidade" value="'.$arraymostracliente['Cidade'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="uf" value="'.$arraymostracliente['UF'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="bairro" value="'.$arraymostracliente['Bairro'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="rua" value="'.$arraymostracliente['Rua'].'" style="border:0px;">';?></td>
    </tr>
    <thead>
      <tr class="w3-pale-green">
        <th>Numero</th>
        <th>CEP</th>
        <th>Complemento</th>
        <th class="w3-blue">Senha</th>
      </tr>
    </thead>
    <tr style="height: 60px;">
      <td><?php echo '<input class="w3-input w3-animate-input" type="number" name="numero" value="'.$arraymostracliente['Numero'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="cep" value="'.$arraymostracliente['CEP'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="complemento" value="'.$arraymostracliente['Complemento'].'" style="border:0px;">';?></td>
      <td><?php echo '<input class="w3-input w3-animate-input" type="text" name="senha" value="'.$arraymostracliente['senha'].'" style="border:0px;">';?></td>
    </tr>
      </table></center>
            <center><button class='w3-btn w3-green' style='height: 40px; width: 100px; position: relative; top: 20px;'>Salvar</button></center>
        </form>
    </div>

<!--<footer>&copy; jorgebatista.com.br</footer>-->
</body>
</html>