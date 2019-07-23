<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        //CLASSE CACHORRO
        class cachorro{
            var $nome;
            var $idade;
            var $raca;
            
            function latir(){
                echo "auauau";
        }
            function brincar(){
                echo "correr";
            }
            
            function getRaca(){
                return $this->raca;
            }
            
            function setRaca($raca){
                $this->raca = $raca; 
            }
            
            function getIdade(){
                return $this->idade;
            }
            function setIdade($idade){
                $this->idade = $idade; 
            }
            
            function getNome(){
                return $this->nome;
            }
            function setNome($nome){
                $this->nome = $nome; 
            }
        }
        




        //CLASE RELOGIO
        class relogio{
            var $peso;
            var $marca;
            var $valor;
            
           function mostrarhora(){
                setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
                date_default_timezone_set( 'America/Sao_Paulo' );
                echo "Hora atual:" .strftime( '%H:%M', strtotime('now') );
        }
            function ajustarhora(){
            }
            
            
            function getPeso(){
                return $this->peso;
            }
            function setPeso($peso){
                $this->peso = $peso; 
            }
            
            function getMarca(){
                return $this->marca;
            }
            function setMarca($marca){
                $this->marca = $marca; 
            }
            function getValor(){
                return $this->valor;
            }
            function setValor($valor){
                $this->valor = $valor; 
            }
        }
        
        ?>
    </body>
</html>
