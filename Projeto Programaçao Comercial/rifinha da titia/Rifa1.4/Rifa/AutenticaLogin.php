<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>eCabines - IFPI</title>
        <link href="CSS/large.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="CSS/logo.png" />
        
        <script type="text/javascript">
            function LoginCorretoUsuario(){
                setTimeout('window.location="TelaUsuario.php"', 0);
            }
            function LoginCorretoADM(){
                setTimeout('window.location="TelaADM.php"',0)
            }
            function loginfalhou(){
                setTimeout('window.location="login.php"', 0);
            }
           
            
        </script>

    </head>
    <body>
<?php
include ("./Funcoes.php");
    conexao();
    
    
$usuario = $_GET['Usuario'];
$senha = $_GET['Senha'];
$con = conexao();
$sql = mysqli_query($con,'Select tipo from Usuario where usuario="'.$usuario.'" and senha="'.$senha.'"');
$resultados = mysqli_fetch_array($sql);
$conta = mysqli_num_rows($sql);
if($conta>0){
    if ($resultados['tipo'] == 'ADM'){
        session_start();
            $_SESSION['usuario']=$_GET['usuario'];
            $_SESSION['senha']=$_GET['senha'];
            echo '<script>LoginCorretoADM()</script>';
    }
    else if($resultados['tipo'] == 'Cliente'){
        session_start();
            $_SESSION['usuario']=$_GET['usuario'];
            $_SESSION['senha']=$_GET['senha'];
            echo '<script>LoginCorretoUsuario()</script>';
    }
}else{
    header("Location: login.php?erro1");
}
?>
    </body>
</html>
