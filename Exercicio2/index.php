<?php

function PrimoInferior($num){
    
    $contador=0;

    for($n = $num; $n > 1; $n--){
        for($i = 2;$i < $n; $i++){
            if($n % $i == 0){
                $isPrime = false;
                break;
            }
            $isPrime = true;
        }
        if($isPrime){
            echo "Numero $num = ".$n;
            break;
        }
    }
      
}

echo PrimoInferior(10);
echo "<br>";
echo PrimoInferior(30);
?>