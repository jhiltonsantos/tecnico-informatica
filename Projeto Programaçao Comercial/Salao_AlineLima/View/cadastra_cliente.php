<!DOCTYPE html>
  
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Cadastro de Cliente</title>  
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>   
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
      
        $(document).ready(function(){  
            $('#showPassword').mousedown('', function(){
                var passwordField = $('#password');    
                passwordField.attr('type', 'text'); 
                $(this).val('Ocultar Senha');
            });
          
            $('#showPassword').mouseup('', function(){
                var passwordField = $('#password');
                passwordField.attr("type", "password");
            });
          
            $('#showPassword').mouseout('', function(){
                var passwordField = $('#password');
                passwordField.attr("type", "password");
            });       
        });
        
        function mascara_cpf(cpf){
            var mycpf = '';
            mycpf = mycpf + cpf;
            if (mycpf.length === 3) {
                mycpf = mycpf + '.';
                document.forms[0].cpf.value = mycpf;
            }
            if (mycpf.length === 7) {
                mycpf = mycpf + '.';
                document.forms[0].cpf.value = mycpf;
            }
            if (mycpf.length === 11) {
                mycpf = mycpf + '-';
                document.forms[0].cpf.value = mycpf;
            }
            if (mycpf.length === 14) {
            }
        }
    </script>
    
    <style>
/*        input[type=text] {
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }*/

        input[type=text]:focus {
            width: 90%;
        }
        input[type=email]{
            font-family: Times new Roman;
            font-size: 90%;
            font-style: italic;
        }
        
        #CO{
            text-align: right;
        }
/*        input:required:invalid {
            color: red;
            border: 1px solid red;
        }
        input:valid { 
            border: 1px solid green;
        }       */
        #obrigatorio{
            color: red;
        }
        #form{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            text-align: justify;
        }
        input[type=text], input[type=password], input[type=email], input[type=tel], input[type=number]{
            width: 90%;
        }
        select{
            width: 90%;
            padding: 16px 20px;
            border-radius: 4px;
        }
        input[type=submit], input[type=reset] {
            background-color: #2f566b;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        #Cvalido{
            color: <?php if(isset($_COOKIE["corValido"])){ echo $_COOKIE["corValido"];}?>;
        }
        
        #panel, #flip {
            padding: 5px;
            text-align: justify;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
            width: 89%
        }

        #panel {
            padding: 20px;
            display: none;
        }
        /**/
        #navlist {
            position: relative;
            float: right;
        }

        #navlist li {
            margin: 0;
            padding: 0;
            list-style: none;
            position: absolute;
            top: 0;
        }

        #navlist li, #navlist a {
            height: 44px;
            display: block;
        }

        #home {
            left: 0px;
            width: 46px;
            background: url('img_navsprites_hover.gif') 0 0;
        }

        #prev {
            left: 63px;
            width: 43px;
            background: url('img_navsprites_hover.gif') -47px 0;
        }

        #next {
            left: 129px;
            width: 43px;
            background: url('img_navsprites_hover.gif') -91px 0;
        }

        #home a:hover {
            background: url('img_navsprites_hover.gif') 0 -45px;
        }

        #prev a:hover {
            background: url('img_navsprites_hover.gif') -47px -45px;
        }

        #next a:hover {
            background: url('img_navsprites_hover.gif') -91px -45px;
        }
        /**/
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }        
    </style>
    
    <body>
        <ul id="navlist">
            <li id="home"><a href="principal.php"></a></li>
        </ul>
    <center>
        <div id="form"> 
            <form action="..\Controller\recebe_cliente.php" method="POST" id="form_contato">
                
                <fieldset>               
                <legend>Preencha os dados com atenção</legend>
                
                <label id="obrigatorio"><p id="CO">* Campo Obrigatório</p></label>
                
                <center>
                    <p id="Cvalido">
                        <?php
                            if(isset($_COOKIE["valido"])){
                                    echo $_COOKIE["valido"]."<br><br>";       
                            }
                        ?>
                    </p>
                </center>
                    
                <label id="obrigatorio">*</label>
                <label>Nome Completo:</label><br>
                <input type="text" name="nome" id="nome" value="" required="" placeholder="" autocomplete="off" autofocus=""><br><br>
                
                <label id="obrigatorio">*</label>
                <label>CPF:</label><br>
                <input type="text" name="cpf" id="cpf" value="" required="" maxlength="14" size="14" onKeyUp="mascara_cpf(this.value)" placeholder="" autocomplete="off" title="Insira apenas números"><br><br>
                   
                <label id="obrigatorio">*</label>
                <label>Email:</label><br>
                <input type="email" name="email" id="email" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Telefone:</label><br>
                <input type="tel" name="telefone" id="telefone" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Bairro:</label><br>
                <input type="text" name="bairro" id="bairro" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Rua:</label><br>
                <input type="text" name="rua" id="rua" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Nº da Casa:</label><br>
                <input type="text" pattern="[0-9]+$" name="casa" id="casa" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Idade:</label><br>
                <input type="text" maxlength="2" name="idade" id="idade" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Nome de Usuario:</label><br>
                <input type="text" name="usuario" id="ususario" value="" required="" placeholder="" autocomplete="off"><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Senha:</label><br>
                <input type="password" name="password" id="password" value="" required="" placeholder="">
                <div class="tooltip">
                    <img id="showPassword" src="data:image/
                         png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/
                         9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxA
                         ggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/
                         ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/
                         suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO
                         2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXr
                         ovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8
                         Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII="/>
                    <span class="tooltiptext">Mostrar Senha</span>
                </div>
                <br><br>
                                
                <label id="obrigatorio">*</label>
                <label>Confirme sua Senha:</label><br>
                <input type="password" name="confirma_senha" id="confirma_senha" value="" required="" placeholder=""><br>
                <br>             
                
                <div id="flip">Sobre Nós</div>
                <div id="panel">Texo informativo
                </div>
                
                <center>
                    <br><input  id="avancar" type="submit" value="Cadastrar"><br>
                </center>
                </fieldset>
      
            </form>
            
        </div>
    </center>  
    </body>
