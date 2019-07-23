<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
        <meta charset="UTF-8">
        <title>Reserva de Horário</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>   
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
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
        
        input[type=date]{
            width: 100%;
        }
        
         input[type=time]{
            width: 170%;
        }
        
        select{
            width: 90%;
            padding: 16px 20px;
            border-radius: 4px;
        }
        input[type=submit], input[type=button] {
            background-color: #2f566b;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #panel, #flip {
            padding: 5px;
            text-align: justify;
            background-color: #e5eecc;
            border: solid 1px #c3c3c3;
            width: 90%
        }

        #flip{
            text-align: center;
        }
        
        #panel {
            padding: 20px;
            display: none;
        }
        #Cvalido{
            color: <?php if(isset($_COOKIE["corValido"])){ echo $_COOKIE["corValido"];}?>;
        }
    </style>
    
    <body>
        <center>
        <div id="form"> 
            <fieldset>  
            <form action="reserva.php" method="POST" id="form_contato">
                             
                <legend>Preencha os dados com atenção</legend>
                <label>
                    <p id="CO">
                        <?php
                            session_start();
                            echo "Usuário Atual: <b>".$_SESSION['nomeUsuario']."</b>";
                        ?>
                    </p>
                </label>
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
                <label>Escolha um Procedimento:</label><br>
                
                <select name="procedimento" id="procedimento">
                    <option value="null">Procedimento</option>
                    <?php
                        if(isset($_POST["procedimento"])){
                            $procedimento = $_POST["procedimento"];
                        }
                        include_once '..\Controller\conexao.php';
                        $res = mysqli_query($con, "SELECT * FROM procedimento");
                        while($escrever=mysqli_fetch_array($res)){
                            echo '<option value ='.$escrever['cod_Procedimento'].'>'.$escrever['cod_Procedimento']." - ".$escrever['procedimento'].'</option>';
                        }
                    ?>
                </select>
                <center>
                    <br><input id="avancar" type="submit" value="Mais Informações"><br>
                </center>
            </form>
 
                <form method="POST" action="../Controller/recebe_reserva.php?procedimento=<?php echo $procedimento;?>">
                <?php
                if(isset($_POST["procedimento"])){
                    $procedimento = $_POST["procedimento"];
                    $cons = mysqli_query($con, "SELECT * FROM procedimento WHERE cod_Procedimento = '$procedimento'");
                    $escrever=mysqli_fetch_array($cons);
                    
                    echo '  <label id="obrigatorio">*</label>
                            <label>Procedimento:</label><br>
                            <input type="text" disabled="" name="procedimentoDps" id="procedimento" value="'.$escrever['procedimento'].'" required="" placeholder="" autocomplete="off"><br><br>'
                            . ' <label id="obrigatorio">*</label>
                                <label>Valor:</label><br>
                                <input type="text" disabled="" name="valorDps" id="valor" value="R$'.$escrever['valor'].',00" required="" placeholder="" autocomplete="off"><br><br>'
                            . '<label>Descrição:</label><br>
                                <textarea disabled="" name="descricaoDps" id="descricao" rows="15" cols="70">'.$escrever['descricao'].'</textarea><br><br>';
                           
                    echo '<table><tr>';
                    
                    echo '<td><label id="obrigatorio">*</label>
                            <label>Dia:</label><br>
                            <input type="date" required="" name="dia" id="dia"><br><br></td>';
                    
                    echo '<td><label id="obrigatorio">*</label>
                            <label>Horário:</label><br>
                            <input type="time" required="" name="horario" id="horario"><br><br></td></tr>';
                    
                     echo '</table><input id="avancar" type="submit" value="Solicitar Horário">';
                }
                ?>
                
                
                <a href="../Controller/encerrar_sessao.php"><input id="avancar" type="button" value="Sair"></a>
                <br><br>
                <div id="flip">Sobre Nós</div>
                    <div id="panel">Venha conhecer nossas instalações e se apaixonar pelos nossos serviços! 
                    Estamos localizados na Quadra 94/ Casa 41 no Residencial Jacinta Andrade/ 64013457/ Teresina-PI
                    Horário de funcionamento: Terça a Domingo (08:00h as 12:00h e 14:00h as 19:00h)
                </div>
            </form>
            </fieldset>
        </div>
    </center>  
    </body>
</html>
