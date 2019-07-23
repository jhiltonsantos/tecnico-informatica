<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/javascript" href="jslogin.js">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed" rel="stylesheet">
        <style>
            body{
               display: grid;
               grid-templte-columns: repeat (5,1fr);
               grid-template-rows: ;
                font-family: 'Montserrat', sans-serif;
               
            }
            #login{
                grid-column: 2;
                margin-top: 30vh;
            }
           

        </style>
    </head>
    <body>
			<?php
				if(isset($_GET["erro1"])){
					echo "<script>alert('Usuario ou senha invalidas');</script>";
				}
			?>
        <div id="login">      
            <form  action="..\Controle\autenticasenha.php" method="post">
                        <?php 
                            if(isset($_COOKIE["erro"])){
                                echo '<br>'.$_COOKIE["erro"].'<br>';        
                            }
                        ?>
                <input type="text" name="user" placeholder="Usuário " required autofocus>
                <input type="password" name="senha" placeholder="Senha" required>				
                <input type="submit" value="entrar" id="entrar" name= "entrar"></br>
            </form><!-- /form -->
           <a href="formulario.php">Cadastre-se</a>
        </div>
    
      
    </body>
</html>

