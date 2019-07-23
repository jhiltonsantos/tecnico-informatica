<!DOCTYPE html>
  
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Cadastro de Procedimento</title>  
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
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
            <form action="..\Controller\recebe_procedimento.php" method="POST" id="form_contato">
                
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
                <label>Nome do Procedimento:</label><br>
                <input type="text" name="procedimento" id="procedimento" value="" required="" placeholder="" autocomplete="off" autofocus=""><br><br>
                
                <label id="obrigatorio">*</label>
                <label>Valor:</label><br>
                <input type="number" name="valor" id="valor" value="" required="" placeholder="" autocomplete="off" autofocus=""><br><br>
                
                <label>Descrição:</label><br>
                <textarea name="descricao" id="descricao" rows="15" cols="70"> </textarea>
                
                <center>
                    <br><input  id="avancar" type="submit" value="Cadastrar"><br>
                </center>
                </fieldset>
      
            </form>
            
        </div>
    </center>  
    </body>
