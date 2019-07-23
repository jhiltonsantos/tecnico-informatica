
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

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
		
    ::-webkit-input-placeholder  { color:lightgray;
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

<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
	function verificaNumero(e) {
                if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
				
	
            
		$(document).ready(function() {
			$("#cpf").keypress(verificaNumero);
			$("#cep").keypress(verificaNumero);
			$("#DN").keypress(verificaNumero);
            $("#ncasa").keypress(verificaNumero);
            $("#tel2").keypress(verificaNumero);
            $("#tel").keypress(verificaNumero);
		});
	
        
		function FormataCpf(evt){
		vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
			if(vr.length === 3) vr = vr+".";
			if(vr.length === 7) vr = vr+".";
			if(vr.length === 11) vr = vr+"-";
		return vr;
	}
		function FormataCep(evt){
		vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
			if(vr.length === 2) vr = vr+".";
			if(vr.length === 6) vr = vr+"-";
		return vr;
	}
	function FormataNumero(evt){
		vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
			if(vr.length === 0) vr = vr+"(";
                        if(vr.length === 3) vr = vr+")";
                        if(vr.length === 9) vr = vr+"-";
		return vr;
	}
        
        function FormataNumero2(evt){
		vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
			if(vr.length === 0) vr = vr+"(";
                        if(vr.length === 3) vr = vr+")";
                        if(vr.length === 9) vr = vr+"-";
		return vr;
	}
        
	
	function FormataDN(evt){
		vr = (navigator.appName === 'Netscape') ?evt.target.value : evt.scrElement.value;
			if(vr.length === 2) vr = vr+"/";
			if(vr.length === 5) vr = vr+"/";
		return vr;
	}
</script> 
</head>
<body>
    <br>
    <div id="title"><h1>Cadastro de cliente </h1></div>
     <?php
                if(isset($_GET["existe"])){
                    echo "<script>alert('Usuario Indisponível!!! Tente Novamente.');</script>";
                }
      ?>
    <div class="center-form">
    <form action="recebeformulario.php" method="get">
        <br><br>
                    <div id="content">
		
		</br>
		
		<input type="text" name="usuario" id="usuario" maxlength="20" placeholder="*Usuário" required/></br>
		</br><input type="password" name="senha" id="senha" placeholder="*Criar senha" required/>
		<input type="password" name="senha" id="senha" placeholder="*Confirmar senha" required/></br>
		</br>
		<!-- <label for="nome_completo">Nome: </label> -->
			<input type="text" id="nome" name="nome" placeholder="*Nome completo" size= "45" required></br></br>
		<!-- <label for="cpf">CPF: </label> -->
                <input id="cpf" type="text" name="cpf" size= "30" placeholder="*CPF" onkeypress="this.value = FormataCpf(event)" maxlength="14" onpaste="return false;" required/><br></br>
		<label for="endereço">________________Endereço________________</label></br>
		</br>
		<!-- <label for="rua">Rua: </label> -->
			<input type="text" name="rua" placeholder="*Rua" size= "40" required></br></br>
		<!-- <label for="numero">Nº da casa: </label> -->
            <input type="text" id="ncasa" name="numero" placeholder = "*Nº da casa" size= "20" required></br></br>
		<!-- <label for="bairro">Bairro: </label> -->
			<input type="text" name="bairro" size= "30" placeholder = "*Bairro" required></br></br>
		<!-- <label for="complemento"> Complemento: </label> -->
			<input type="text" name="complemento" size= "30" placeholder = "Complemento"></br></br>
		<!-- <label for="cep">CEP: </label> -->	
			<input type="text" id="cep" name="cep" placeholder = "*CEP" size= "30" placeholder="Ex: 00.000-00" onKeyPress="this.value = FormataCep(event)" maxlength="10" onBlur="ValidaCep(form1.cep)" required></br></br>
		<!-- <label for="cidade">Cidade: </label> -->
			<input type="text" name="cidade" placeholder = "*Cidade" size= "30" required>      
		<label>------------</label>
		<!-- <label for="uf">   UF: </label> -->
		<select name="uf"> 
			<option >UF </option>
			<option value="AC"> AC </option>
			<option value="AL"> AL </option>
			<option value="AP"> AP </option>
			<option value="AM"> AM </option>
			<option value="BA"> BA </option>
			<option value="CE"> CE </option>
			<option value="DF"> DF </option>
			<option value="ES"> ES </option>
			<option value="GO"> GO </option>
			<option value="MA"> MA </option>
			<option value="MT"> MT </option>
			<option value="MS"> MS </option>
			<option value="MG"> MG </option>
			<option value="PA"> PA </option>
			<option value="PB"> PB </option>
			<option value="PR"> PR </option>
			<option value="PE"> PE </option>
			<option value="PI"> PI </option>
			<option value="RR"> RR </option>
			<option value="RO"> RO </option>
			<option value="RJ"> RJ </option>
			<option value="RN"> RN </option>
			<option value="RS"> RS </option>
			<option value="SC"> SC </option>
			<option value="SP"> SP </option>
			<option value="SE"> SE </option>
			<option value="TO"> TO </option>
		</select></br>
		<label>________________________________________</label></br>
		</br>
		<!-- <label for="telefone-wpp">Telefone Whatsapp:</label> -->
                <input type="text" id="tel" name="telefone-wpp" placeholder = "*Tel. Whatsapp                           
                       Ex:(86)99999-9999" size= "50" maxlength="14" onkeypress= "this.value = FormataNumero(event)" required/>
                </br></br>
        <!-- <label for="telefone2">Telefone Opcional:</label> -->
			<input type="text" id="tel2" name="telefone" size= "50" maxlength="14" placeholder="Tel. Opcional                                 Ex:(86)99999-9999" onkeypress= "this.value = FormataNumero2(event)"/>
                </br></br>
		<!-- <label for="email">Email: </label> -->
			<input type="email" name="email" size="50" placeholder="*E-mail                                  
                               Ex:exemplo@email.com" required></br></br>
		<!-- <label for="dtnas">Data de nascimento: </label> -->
                <input id="DN" type="text" name="data" size= "50" class="corForm" placeholder="*Data de nascimento:              
             Ex:31/12/1900" onKeyPress="this.value = FormataDN(event);" maxlength="10" onBlur= "ValidaDataform1.data);" required/></br>
		</br>
                <label for="sexo" class="corForm"><p>Sexo: </p></label>
			<input type="radio" value="Masculino" name="sexo">Masculino</input>
			<input type="radio" value="Feminino" name="sexo">Feminino</input></br>
			</br>
			<label><p class="corForm">* Campos Obrigatorios</p></label>
		
                        <button  value="submit" >Enviar</button>
                        <p></p>
			
			
	
	</form>
    <?php
		?>
	</div>
    </div>
</body>
</html>