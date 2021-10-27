
<?php
        class Calculadora{

            public function sumar($num1, $num2){
                    $resultado = $num1 + $num2 . '<br/>';
                        echo $resultado;
            }
            public function restar($num1, $num2){
                $resultado = $num1 - $num2 . '<br/>';
                    echo $resultado;
            }
            
            public function multiplicar($num1, $num2){
                if($num2 !== 0){
                    $resultado = $num1 * $num2 . '<br/>';
                    echo $resultado;
                }else{
                    echo 'Error, no se puede dividir por 0' . '<br/>';
                }
              
            }
            public function dividir($num1, $num2){
                $resultado = $num1 / $num2;
                    echo $resultado. '<br/>';
            }

            public function par_impar($num1){
                if(($num1 % 2) === 0){
                    echo "El número es par";
                }else{
                    echo 'El número es impar';
                }
            }
      
        }
    
        $cal  = new Calculadora();
        $cal->sumar(5,15);
        $cal->restar(5,15);
        $cal->dividir(5,15);
        $cal->par_impar(3);

?>