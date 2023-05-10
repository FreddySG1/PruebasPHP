<?php

    function mayor_menor($numeros){

        $mayor = max($numeros);
        $menor = min($numeros);
        
        return array("mayor" => $mayor, "menor" => $menor);
    
    }

   $numeros = array (0,91,1,0,-1,6,10);
   $resultado = mayor_menor($numeros);

   echo "El número mayor es: " . $resultado['mayor'] . "\n";
   echo "El número menor es: " . $resultado['menor'];

?>