<?php

$numero = $_POST['numero'];
$hora = $_POST['hora_paga'];
$data = $_POST['data_pagamento'];

include ("./conectbd.php");
$conect = conexao();

$confirmapg = mysqli_query($conect, "call confirma_pagamento (".$numero.");");
header("Location: confirmar_pg.php?confirmado");


?>