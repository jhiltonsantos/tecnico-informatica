<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta charset="windows-1252">
        <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="nav.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
        *{
          margin: 0px;
        }
        body{
          display: grid;
          grid-template-columns: repeat(6,1fr);
          /*grid-template-rows: repeat(3,1fr);*/
            font-family: 'Patua One', cursive;
            background: lightblue;

        }
        .trofeu{
          grid-column: 4;
          grid-row: 2;
          align-items: center;
          justify-items: center;
        }
        .trofeu>img{
          width: 50vh;
          height: 50vh;
        }
        tr:nth-child(odd){background-color: #ddd}
        table{
          border:0.5vh solid #ddd;
        }
        td{
          width: 40vh;
          height: 4vh;
        }
        </style>
    </head>
    <body>
      <div id='cssmenu'>
		<ul>
			<li ><a href='usuario.php'>Perfil<i class="material-icons">account_box</i></a>
			<li class=''><a href='solicitardinheiro.php'>Solicitar moedas<i class="material-icons">monetization_on</i></a>
			<li class='' ><a href='rodadas.php'>Rodadas<i class="material-icons">storage</i></a></li>
			<li class='' ><a href='concluido.php'>Jogos concluidos<i class="material-icons">playlist_add_check</i></a></li>
			<li class='' ><a href='resultadocliente.php'>Resultado<i class="material-icons">trophy</i></a></li>
			<li class='' ><a href='logoff.php'>Logout<i class="material-icons">close</i></a></li>
		</ul>
      </div>
      <div class="trofeu">
        <img src="images/ganhador.jpg">

		<?php
			include 'fucao.php';
			$conect = conexao();
			
			$primeiro = mysqli_query($conect, "select * from Usuario order by ponto_dia desc;");
			$arrayprimeiro = mysqli_fetch_array($primeiro);
			$primeirogeral = mysqli_query($conect, "select * from Usuario where ponto_dia = ".$arrayprimeiro["ponto_dia"].";");
			while($arrayprimeirogeral = mysqli_fetch_array($primeirogeral)){
				echo '<table class="primeiro">';
				echo '<thead>';
				echo '<th>Usuario</th>';
				echo '<th>Nome</th>';
				echo '<th>Pontuação:</th></thead>';
				echo '<tr><td>'.$arrayprimeirogeral['usuario'].'</td>';
				echo '<td>'.$arrayprimeirogeral['nome_completo'].'</td>';
				echo '<td>'.$arrayprimeirogeral['ponto_dia'].'</td>';
				echo '</tr></table>';
			}
		?>
       
      </div>
    </body>
</html>
