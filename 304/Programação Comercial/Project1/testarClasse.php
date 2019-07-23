<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include ("cachorro.php");
            $cachorro = new cachorro();
            echo $cachorro->latir();
            echo $cachorro->brincar();
        include ("relogio.php");
            $relogio = new relogio();
            echo $relogio->mostrarhora();
            echo $relogio->ajustarhora();
        ?>
    </body>
</html>
