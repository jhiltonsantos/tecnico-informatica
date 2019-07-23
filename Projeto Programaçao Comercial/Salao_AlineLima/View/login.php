<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Log in | Aline Lima</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <style>
/*        body{
            background-image: url('Logo.jpg');
            background-repeat: no-repeat;
        }*/
        #login_form{           
            padding: 20px;
            width: 50%;
            background-color: #cccccc;
            text-align: center;
            border-radius: 10px;
        }
        
        img{
            border-radius: 10px;
        }
        
        input[type=text], input[type=password], input[type=submit]{
            width: 50%;
            color: black;
            font-family: Georgia;
        }
        p{
            color: red;
        }
        
    </style>
    <body>
    <center>
        <div id="login_form">
            <form action="..\Controller\valida_login.php" method="POST">   
                <img src="Logo.jpg" height="200">
                    <p>
                        <?php 
                            if(isset($_COOKIE["erro"])){
                                echo '<br>'.$_COOKIE["erro"].'<br>';        
                            }
                        ?>
                    </p>
                    <!--<img src="usuario.png">-->
                    <input type="text" title="Usuário" name="campo_usuario" required="" autocomplete="on" autofocus="" placeholder="Usuario"><br>
                    <br>
                    <input type="password" title="Senha" name="campo_senha" required="" autocomplete="off" placeholder="Senha"><br>
                    <br>
                    <input type="submit" value="Entrar">
            </form>
        </div>
    </center>
    </body>
</html>
