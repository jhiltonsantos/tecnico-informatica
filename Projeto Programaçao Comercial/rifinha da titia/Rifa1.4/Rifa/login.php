<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <link rel="stylesheet" type="text/javascript" href="jslogin.js">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed" rel="stylesheet">
        <style>
            body{
                height: 100%;
                background-color: transparent;
            }
            a{
                text-decoration: none;
                color:black;
            }
            body{
                font-family: 'Montserrat', sans-serif;
            }


        </style>
    </head>
    <body>
        <p>
            <?php
                if(isset($_GET["erro1"])){
                    echo "<script>alert('Usuário ou Senha Inválidos! Tente novamente.');</script>";
                }
            ?>
            <?php
                if(isset($_GET["fazlogin"])){
                    echo "<script>alert('Faça login no sistema');</script>";
                }
            ?>
        </p>
           <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="AutenticaLogin.php" method="GET">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="Usuario" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="Senha" required>
                <div id="remember" class="checkbox">
                   
                </div><br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button><br>
            </form><!-- /form -->
           <a href="formulario.php">Cadastre-se</a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    
        <?php
       
       
           ?>
      
    </body>
</html>

