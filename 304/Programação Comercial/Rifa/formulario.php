<html>
<title>Cadastro</title>
<head>
<meta charset="UTF-8">
</head>
<body>

    <form action="recebeformulario.php" method="get">
		<label for="nome_completo">Nome: </label>
		<input type="text" name="nome" required></br>
		<label for="cpf">CPF: </label>
                <input type="number" name="cpf" min="11" max="11" required></br>
		<label for="endereço">Endereço </label></br>
		<label for="rua">Rua: </label>
		<input type="text" name="rua" required></br>
		<label for="numero">Número da casa: </label>
                <input type="number" name="numero" max="4" required></br>
		<label for="bairro">Bairro: </label>
		<input type="text" name="bairro" required></br>
		<label for="cep">CEP: </label>
                <input type="number" name="cep" size= "5" maxlength="5" required> - <input type="number" name="cep2" size="3" maxlength="3"></br>
		<label for="cidade">Cidade: </label>
		<input type="text" name="cidade" required></br>
		<label for="uf">UF: </label>
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
		</select></br>
		<label for="telefone-wpp">Telefone Whatsapp:</label>
		<input type="number" name="dddtelefone-wpp" min="2" max="3" size="2" required>
                <input type="number" name="telefone-wpp" min="8" max="9" required>
                </br>
                <label for="telefone2">Telefone 2:</label>
		<input type="number" name="telefone2"></br>
		<label for="email">Email: </label>
		<input type="email" name="email" required></br>
		<label for="dtnas">Data de nascimento: </label>
		<input type="date" name="dtnas" required></br>
		<label for="sexo">Sexo: </label>
		<input type="radio" name="sexo">Masculino</input>
		<input type="radio" name="sexo">Feminino</input></br>
		<input type="submit" value="Enviar">
	</form>
    <?php
    ?>

</body>
</html>