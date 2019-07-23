<html xmlns="http://www.w3.org/1999/xhtml">
<title>Nova Rifa</title>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Nova Rifa</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed" rel="stylesheet"></link>
<style>
    
    body{
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 34));
        
    }
    
    #title{
        width: 70%;
        height: 50px;
        background-color: white;
        text-align: center;
        border-radius: 20px;
        margin-left: 10%;
        
    }
    
    #content,body,select{
        margin-left: 10%;
        font-family: 'Montserrat', sans-serif;
        color: darkslateblue;
    }
        
    ::-webkit-input-placeholder {
        color:lightgray;
        font-family: 'Montserrat', sans-serif;
        }

    div.center-form > form {
        position: relative;
        margin-top: 5%;
        left:10%;       
        background-color: white;
        border-radius: 20px;
        width: 70%;
    }
    
    .corForm {
        color:darkslategray;
        }
    
    input,select{
        border-radius: 5px;
        }
    
    button{
        width: 10%;
        height: 30px;
        font-family: 'Montserrat', sans-serif;
        }
                
                
</style>
</style>

<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
    

    function verificaNumero(e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
                
    }

        $(document).ready(function() {
            $("#dt").keypress(verificaNumero);
            $("#dtprev").keypress(verificaNumero);
            $("#valor").keypress(verificaNumero);
            });

        function FormataDTI(evt){
        vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
            if(vr.length === 2) vr = vr+"/";
            if(vr.length === 5) vr = vr+"/";
        return vr;
        }
        function FormataDTP(evt){
        vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
            if(vr.length === 2) vr = vr+"/";
            if(vr.length === 5) vr = vr+"/";
        return vr;
        }
        
</script>   
</head>
<body class="center-form">
  
</br>
    <div id="title"><h1>Criar Nova Rifa</h1></div>
    
    <div class="center-form">
    <form action="..\Controle\criar_rifa.php" method="POST">
        <br><br>
                    <div id="content">
        
        </br>
        <label>Nome da Rifa: </label>
        <br>
        <input type="text" name="nome_rifa" maxlength="100" size = 30 required/></br>
        <br>
        <label>Descrição da Rifa: </label>
        <br>
        <textarea name="descricao" id="descricao" rows="15" cols="70"> </textarea>  
        <br>
        <label>Prêmio: </label>
        <br>
        <input type="text" name="premio" maxlength="100" size = 30 required/></br>
        <br>
        <br>
        <label>Valor: </label>
        <br>
        <input type="text" name="valor" maxlength="10" size = 30 required/></br>
        <br>
        <br>
        <label>Data Inicio: </label>
        <br>
        <input id="dt" type="text" name="dt_inicio" size = 20 maxlength="10" onKeyPress="this.value = FormataDTI(event)"  onBlur= "ValidaDataform1.dt);"/></br>
        <br>
        <br>
        <label>Data Prevista do Sorteio: </label>
        <br>
        <input id="dtprev" type="text"  name="dt_prev" size = 20 maxlength="10" 
        onKeyPress="this.value = FormataDTP(event)" onBlur= "ValidaDataform1.dtprev);" /></br>
        <br>
        
        <br>
        <button  value="submit" >Enviar</button>
         <br><br>
    
    </form>
    </div>
    </div>
</body>
</html>