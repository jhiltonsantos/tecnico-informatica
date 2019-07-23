<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
           .bt1 {
               
               background-color: green;
               border-radius: 20%;
               width: 100px;
               height: 80px;   
               
                             
            }
            .bt1:hover {
               background-color: blue;                
            }
            
        </style>
        <script>
        function primeiro(){
            $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
        }
        </script>
    </head>
    <body>
        <button class="bt1" onclick="primeiro()">1 - 100</button>
        <button class="bt1">101 - 200</button>
        <button class="bt1">201 - 300</button>
        <button class="bt1">301 - 400</button>
        <button class="bt1">401 - 500</button>
        <button class="bt1">501 - 600</button>
        <button class="bt1">601 - 700</button>
        <button class="bt1">701 - 800</button>
        <button class="bt1">801 - 900</button>
        <button class="bt1">901 - 1000</button>
        <button class="bt1">1001 - 1100</button>
        <button class="bt1">1101 - 1200</button>
        
         <?php
       
        ?>
    <p id="demo"></p>
    </body>
</html>
