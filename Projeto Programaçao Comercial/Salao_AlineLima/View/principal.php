<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <title>Principal | Aline Lima</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>    
    body {margin: 0;}
    
    img {
        max-width: 100%;
        height: auto;
    }
    
    /*Menu*/
    
    .ul {
        overflow: hidden;
        background-color: #6b442f;
        font-family: Arial;
    }
    
    .ul a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .li {
        float: left;
        overflow: hidden;
    }

    .li .dropbtn {
        font-size: 16px;    
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
    }

    .ul a:hover, .li:hover .dropbtn {
        background-color: red;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .li:hover .dropdown-content {
        display: block;
    }
    
    /**/
    
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
    
    /**/
    
    #caixa_usuario{
        float: right;
    }
</style>

<body>
    <header>
        <div id="caixa_usuario">
            <?php
                session_start();
                echo "Usuário Atual: <b>".$_SESSION['nomeUsuario']."</b>";
            ?>
        </div>
    </header>
        
<div class="ul">
    
    <div class="li">
        <button class="dropbtn">Home</button>
            <div class="dropdown-content">
                
            </div>
    </div> 
    
    <div class="li">
        <button class="dropbtn">Gerência</button>
            <div class="dropdown-content">
                <a href="cadastra_cliente.php">Cadastrar Cliente</a>
                <a href="#">Alterar dados de um Cliente</a>
                <a href="apaga_cliente.php">Apagar Cliente</a>  
                <a href="listar_solicitacao.php">Ver Lista de Solicitações</a>  
                <a href="espera.php">Ver Lista de Espera</a>  
                <a href="listar_atendidos.php">Ver Lista de Atendidos</a> 
            </div>
    </div>
    
    <div class="li">
        <button class="dropbtn">Procedimentos</button>
            <div class="dropdown-content">
                <a href="cadastra_procedimento.php">Cadastrar Procedimento</a>
                <a href="#">Alterar dados de um Procedimento</a>
                <a href="apaga_procedimento.php">Apagar Procedimento</a>
            </div>
    </div>
    
    <div class="li">
      <button class="dropbtn">Consulta</button>
      <div class="dropdown-content">
          <a href="consulta_cliente.php">Consultar Cliente</a>
          <a href="consulta_usuario.php">Consultar Usuário</a>
          <a href="consulta_procedimento.php">Consultar Procedimento</a>
      </div>
    </div> 
        <a href="../Controller/encerrar_sessao.php">Sair</a>
</div>

<!--<footer>&copy; jorgebatista.com.br</footer>-->
</body>
</html>