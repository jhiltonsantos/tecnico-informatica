<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Apagar Procedimento</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style>
/*        input[type=submit], input[type=reset] {
            background-color: #2f566b;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }*/
        
        #Cvalido{
            color: <?php if(isset($_COOKIE["corValido"])){ echo $_COOKIE["corValido"];}?>;
        }
        #texto{
            text-align: right;
        }
        #apagar{
            float: right;
        }
        #obrigatorio{
            color: red;
        }
        #form{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            text-align: left;
        }
        input[type=text], input[type=password], input[type=number]{
            width: 85%;
        }
        select{
            width: 35%;
        }
        input[type=submit], input[type=reset] {
            cursor: pointer;
        }
    </style>
    
    <body>
    <center>
        <div id="form">
            
            <form method="POST" action="../Controller/remove_procedimento.php">
                
                <fieldset>
                    
                    <legend>Preencha os dados com atenção</legend>
                    
                    <label id="obrigatorio"><p id="texto">* Campo Obrigatório</p></label>
                    
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
                    <label>Insira o código do Procedimento que deseja <b>Apagar</b>:</label><br>
                    <input type="text" name="codigo" value="" autofocus="" autocomplete="off" pattern="[0-9]+$" required="">
                    <input type="submit" id="apagar" value="Apagar">
                </fieldset>
                                
            </form>
            
        </div>
    </center>
    </body>
</html>
