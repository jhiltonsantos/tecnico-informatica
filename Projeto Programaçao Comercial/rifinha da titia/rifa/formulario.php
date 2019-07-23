<html xmlns="http://www.w3.org/1999/xhtml">
<title>Cadastro</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="cssform.css">
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
	function verificaNumero(e) {
                if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
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
    <center>
    <form action="recebeformulario.php" method="get">
	
		<legend>Cadastro de cliente</legend>
		<label for="nome_completo">Nome: </label><br>
			<input type="text" name="nome" placeholder="Digite seu nome" required></br></br>
		<label for="cpf">CPF: </label><br>
                <input id="cpf" type="text" name="cpf" placeholder="EX:000.000.000-00" onkeypress="this.value = FormataCpf(event)" maxlength="14" onpaste="return false;" required/><br></br>
		<label for="endereço">Endereço </label></br>
		<label for="rua">Rua: </label><br>
			<input type="text" name="rua" required></br></br>
		<label for="numero">Número da casa: </label><br>
            <input type="text" id="ncasa" name="numero" max="4" required></br></br>
		<label for="bairro">Bairro: </label><br>
			<input type="text" name="bairro" required></br></br>
		<label for="cep">CEP: </label><br>
            <input type="text" id="cep" name="cep" placeholder="Ex: 00.000-00" onKeyPress="this.value = FormataCep(event)" maxlength="10" onBlur="ValidaCep(form1.cep)" required></br></br>
		<label for="cidade">Cidade: </label><br>
                <input type="text" name="cidade" required></br></br>      
		<label for="uf">   UF: </label><br>
		<select name="uf">
			<option >Selecione </option>
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
		</select></br></br>
		<label for="telefone-wpp">Telefone Whatsapp:</label><br>
                <input type="text" id="tel" name="telefone-wpp" maxlength="14" placeholder="Ex:(86)99999-9999" onkeypress= "this.value = FormataNumero(event)" required/>
                </br></br>
        <label for="telefone2">Telefone 2:</label><br>
			<input type="text" id="tel2" name="telefone" maxlength="14" placeholder="Ex:(86)99999-9999" onkeypress= "this.value = FormataNumero2(event)" required/>
                </br></br>
		<label for="email">Email: </label><br>
			<input type="email" name="email" required></br></br>
		<label for="dtnas">Data de nascimento: </label><br>
			<input id="DN" type="text" name="data" onKeyPress="this.value = FormataDN(event)" placeholder="Ex:01/01/2001" maxlength="10" onBlur= "ValidaDataform1.data);" required/></br>
		<label for="sexo">Sexo: </label><br>
			<input type="radio" value="M" name="sexo">Masculino</input><br>
			<input type="radio" value="F" name="sexo">Feminino</input></br></br>
			<input id="botao" type="submit" value="Enviar">

	</form>
           </center>
    <?php
    ?>
 
</body>
</html>