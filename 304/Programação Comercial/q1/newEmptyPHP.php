<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <style>
            img{
                width:265px;  
                height:300px;
              }
           table{
               border:1;
               border-collapse:collapse;
            }
            td{
                
               border:1px solid black;
            }
            tr{
                border:1px solid black;
            }
    </style>
    </head>
    <body>
        <?php
          echo"<table>";
            for($i=1;$i<=6;$i++){
               echo"<td><img src ='giphy$i.gif'></td>";
                if($i==3){
                echo"<tr></tr>";     
            }
          }
        ?>
    </body>
</html>

