<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type='text/javascript' src='jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src="javascript.js"></script>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
        <style>
            body{
                background-color: #FEFBD0;
                font-family: 'PT+Sans+Narrow', sans-serif;
                
            }
            table {
                float: center;
                text-align: center;
                margin: auto;
                border-spacing: 10px;
                width: 30%;
                height: 40vh;
                background-color: #FDCFB7;
                left: 30%;
               border-radius: 10px;
                
            }
            #bt {
               text-align: center;
               background-color: #65B98D;
               border-radius: 20%;
               width: 9%;
               height: 5vh;            
                             
            }
            #bt:hover {
               background-color: blue;                
            }
            #bt:focus {
                background-color: red;
            }
           .bt1 {
               
               background-color: #5EB955;
               border-radius: 20%;
               width: 100px;
               height: 13vh;
               
                             
            }
            .bt1:hover {
               background-color: blue;                
            }
            
            .un{    
                position: absolute;
                left: 36%;
                top: 47%;                
            }
            
            
        </style>
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
        printf('
$(document).ready(function(){
    $("#a'.$i.'").click(function(){
        $("#baixar'.$i.'").slideToggle("slow");
    });
});');
    }
?>


function mandar(){
    document.location.href = "servidor.php?numeros = '" + arraio + "'";
}
  
        
</script>
    </head>
    <body>
       
        
        <?php
        echo '<table>';
            for ($i=0; $i<12; $i++){
                echo $i%4 === 0 && $i !== 0 ?  "<tr>" : "";
                
                
                $numa = $i*100+1;
                $numo = $i*100+100;
                echo '<td><div id="a'.$i.'" class="bt1"><br>'.$numa.'<br> -<br> '.$numo.'</div>';
               
                echo"<div id='baixar$i' class='un' style='display : none'>";
                for ($z=0; $z<100; $z++){
                    $zi = $z+$numa;
                    echo "<button id='bt' class='".$zi."' onclick='myFunction($zi)'>".$zi."</button>";
                    if($zi%10===0)
                        echo "<br>";
                    echo "\n";
                }
                echo"</div></td>";
            }
        echo"<td></table>";
         
        ?>
        <div id="num">
             <p id="demo"></p>
        </div>
   
    </body>
</html>

