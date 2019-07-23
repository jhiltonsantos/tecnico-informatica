<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                border-collapse: separate;
            }
            td{
                border: 1px solid black;
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<table><tr>";
        for ($i=1; $i<=100; $i++){
            echo"<td>".$i."</td>";
            if($i%10==0)
        echo "</tr><tr>";
            echo"\n";
        }
        echo"</tr></table>";
        ?>
    </body>
</html>
