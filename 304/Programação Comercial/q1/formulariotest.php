
<html>
<head> Teste Formulario </head>
<body>    
    <br/>
    <br/>
    <?php
    echo "<br/>Olá ".$_GET["nome1"]." ".$_GET["nome2"]." ".$_GET["nome3"]."!!!";
    echo "<br/>Do sexo: ".$_GET["sexo"];
    echo "<br/> Nome de Login: ".$_GET["login"]."<br/>Senha do User: ".$_GET["passw"].".<br/>"; 
    $possuiconta = $_GET["possuiconta"];
    print_r ($possuiconta);    
    echo "<br/> Outras:".$_GET["outrascontas"];
    ?>
    
</body>
</html>
