<?php
    
   include './conectbd.php';
   $conect = conexao();
   
   $cod = $_POST['cod'];
   $status = mysqli_query($conect, "select status from Rifa where cod_rifa = $cod");
   $arrayrifa2 = mysqli_fetch_array($status);
   
   if($arrayrifa2['status'] == 'Em Andamento'){
       header("Location: ../Mostrar/AdmMain.php?deleta");
   }else{
       $apaga = mysqli_query($conect, "call deleta_pontos ('$cod');");
       header("Location: ../Mostrar/AdmMain.php?apagado");
   }
