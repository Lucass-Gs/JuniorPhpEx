<?php

function PrimoInferior($num){
    
    $contador=0;
    $maiorPrimo=0;
    for($n = $num; $n > 1; $n--){
        for($i = 2;$i < $n; $i++){
            if($n % $i == 0){
                $isPrime = false;
                break;
            }
            $isPrime = true;
        }
        if($isPrime){
            $maiorPrimo = $n;
            break;
            
        }
    }
      return $maiorPrimo;
}

echo "Numero 10 = ".PrimoInferior(10);
echo "<br>";
echo "Numero 30 = ".PrimoInferior(30);
?>
