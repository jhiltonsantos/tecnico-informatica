<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ("cachorro2.php");
        
        $cachorro = new cachorro();
            $cachorro->setNome("lulu");
            $cachorro->setRaca("vira-lata");
            $cachorro->setIdade(2);
            echo "Nome do cachorro é: ".$cachorro->getNome().".<br>";
            echo "Idade do cachorro é: ".$cachorro->getIdade().".<br>";
            echo "Raça do cachorro é: ".$cachorro->getRaca().".<br><br>";
          
        $relogio = new relogio();
            $relogio->setMarca("tagheuer");
            $relogio->setPeso(100);
            $relogio->setValor(2000);
            echo "A marca do relogio é: ".$relogio->getMarca().".<br>";
            echo "O peso do relogio é: ".$relogio->getPeso()." g.<br>";
            echo "O valor do cachorro é: ".$relogio->getValor().".<br>";
            
        ?>
    </body>
</html>
