<?php

function SequenciaCrescente($array){

    $arrayOriginal = $array;
    $arrayClone = $arrayOriginal;
    $ordenado = $array;
    sort($ordenado);

    for($i=0;$i<$array;$i++){
        array_splice($arrayOrinal,0, $i);
        array_splice($arrayClone,0, $i);
        sort($arrayClone);

        if($arrayOriginal == $arrayClone){
            $ordenado = $arrayOriginal;
            implode(" ",$ordenado);
            echo implode(" ",$ordenado). " True";
        }else{
            echo implode(" ",$ordenado). " False";
        }
    }
          
      
}

echo SequenciaCrescente(array('1','2','3'));

?>