<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION["autenticando"]) || !isset($_SESSION["usuario"])){
		header("Location: login.php?erro=2");
	}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="pontos.css" rel="stylesheet" type="text/css"/>
        <script type='text/javascript' src='jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src="javascript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="jquery-3.3.1.js"></script>

        <script>
           var arraio = [];
function myFunction(num) {

    var i = 0;
    while(arraio[i] !== undefined){
        if(num === arraio[i]){
            var b = i;
            while(arraio[b] !== undefined){
                arraio[b] = arraio[b+1];
                b++;
            }
            document.getElementById("demo").innerHTML = arraio;
            document.getElementById("demo").innerHTML += " " ;
            system.pause;
        }
        i++;
    }
    arraio[i] = num;
    document.getElementById("demo").innerHTML = arraio;
    document.getElementById("demo").innerHTML += " " ;


	}

<?PHP
    for($i=0;$i<12;$i++){
        printf('$(document).ready(function(){
			$("#a'.$i.'").click(function(){
			$("#baixar'.$i.'").slideToggle("slow");
			});
	});');
    }
?>


function mandar(){
    document.location.href = "../Controle/servidor.php?numeros=" +arraio;
}


</script>
    </head>
    <body>

    <?php
    if(isset($_GET['alterado'])){
        echo "<script>alert('Cadastro Alterado!');</script>";
    }
    if(isset($_GET['deleta'])){
        echo "<script>alert('Rifa Não Finalizada! Exclusão Cancelada!');</script>";
    }
    if(isset($_GET['apagado'])){
        echo "<script>alert('Apagado com Sucesso!');</script>";
    }
    if(isset($_GET['rifaexiste'])){
        echo "<script>alert('Há Rifa em Andamento! Criação Impossibilitada!');</script>";
    }

    ?>
		<div id='cssmenu'>
		      <ul>
		         <li ><a href='usuario.html'>Home</a>
		         <li class=''><a href='solicitardinheiro.html'>Gerencia</a>
		         <li ><a href='rodadas.html'>Procedimentos</a></li>
		         <li class='active' ><a href='resultado.html'>Sair</a></li>
		      </ul>
		      </div>

<?php
  echo   '<div id="idtable">
	<table id="tabela">
  <tr class="header">
    <th>Titulo da Rifa</th>
    <th>Código da Rifa</th>
    <th>Premio</th>
    <th>Valor</th>
    <th>Status</th>
    <th>Data de Início</th>
    <th>Previsão de Sorteio</th>
  </tr>';


  include ("../Controle/conectbd.php");
  $conect = conexao();

  $rifa = mysqli_query($conect, "Select * from Rifa where status = 'Em Andamento';");
  $conta = mysqli_num_rows($rifa);
  if($conta>0){
  while ($arrayrifa = mysqli_fetch_array($rifa)){
      echo '<form method="post" action="../Controle/servidor.php>"';
      echo '<tr class="w3-white">';
      echo '<td><input class="w3-input w3-animate-input" type="text" name="nome" value="'.$arrayrifa['nome_rifa'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="number" name="cod" value="'.$arrayrifa['cod_rifa'].'" style="border:0px;" readonly="true"></td>'
      . '<td><input class="w3-input w3-animate-input" type="text" name="premio" value="'.$arrayrifa['Premio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="valor" value="'.$arrayrifa['valor'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="status" value="'.$arrayrifa['status'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="date" name="data" value="'.$arrayrifa['data_inicio'].'" style="border:0px;" readonly="true"></td>'
              . '<td><input class="w3-input w3-animate-input" type="text" name="ganhador" value="'.$arrayrifa['data_prev_sorteio'].'" style="border:0px;" readonly="true"></td>';


  }}else{
      echo '</table></div>';
      echo '<center><h2>Nenhuma Rifa em Andamento</h2></center>';
  }
  ?>




        <?php
        echo'<div id="tabelados12">';
        echo '<table id="12">';
            for ($i=0; $i<12; $i++){
                echo $i%4 === 0 && $i !== 0 ?  "<tr>" : "";


                $numa = $i*100+1;
                $numo = $i*100+100;
                echo '<td><div id="a'.$i.'" class="bt1"><br>'.$numa.'<br> -<br> '.$numo.'</div>';

                echo "<div id='baixar$i' class='un' style='display : none'>";
                for ($z=0; $z<100; $z++){
                    $zi = $z+$numa;

                    echo "<button id='bt' class='".$zi."' onclick='myFunction($zi)' onclick='recebenum($zi)'>".$zi."</button>";

					if($zi%10===0)
                        echo "<br>";
                    echo "\n";
                }
                echo"</div></td>";
            }
        echo '<tr><td>
		<button onclick="mandar()">Enviar</button></td></table>';
        echo'</div>'
        ?>

		<div id="num">
             <p id="demo">
				</p>
        </div>
    </body>
</html>
