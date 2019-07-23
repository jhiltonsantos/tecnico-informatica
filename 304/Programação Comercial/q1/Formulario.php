<html>
    <head>19/07/2017</head>
    <body>
        <?php
        echo "Exemplo PHP";
        ?> 
        <form action = "formulariotest.php" method="get">
         <fieldset> 
             <legend>Pesquisa de Mercado</legend>
            <label for="nome1">NOME: <br/>
            <input type="text" name="nome1"><br/>
            <label for="nome2">APELIDO: <br/>
            <input type="text" name="nome2"><br/>
            <label for="nome3">SOBRENOME: <br/>
            <input type="text" name="nome3"><br/>
            <label> SEXO: </label><br/>
            <input type="radio" value="MASCULINO" name="sexo">Masculino<br/>
            <input type="radio" value="FEMININO" name="sexo">Femino<br/>
            <label>USUARIO:</label>
            <input type="text" name="login"><br/>
            <label>SENHA:</label>
            <input type="password" name="passw"><br/>
            <label>POSSUI:</label><br/>
            <input type="checkbox" name="possuiconta[]" value="steam">STEAM<br/>
            <input type="checkbox" name="possuiconta[]" value="origin">ORIGIN<br/>
            <input type="checkbox" name="possuiconta[]" value="battlenet">BATTLENET<br/>
            <input type="checkbox" name="possuiconta[]" value="gog">GOG<br/>
            <input type="checkbox" name="possuiconta[]" value="outra">OUTRAS<br/>
            <br/><textarea name="outrascontas" rows="2" cols="10"></textarea>
            <input type="submit" name="Enviar" value="Enviar">
            <input type="reset" name = "Resetar" value="Resetar">         
            </fieldset>  
        </form>
    
            
    </body>
    
</html>

