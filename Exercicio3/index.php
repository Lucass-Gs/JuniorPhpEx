<?php

$array = [];
for($i=0;$i<20;$i++){
    array_push($array,mt_rand(1,10));
}
$values = array_count_values($array);
arsort($values);
$keys=array_keys($values);
echo "Array Sorteado = [".implode(" ",$array)."]<br>";
echo "O numero que mais se repete é o ".$keys[0].".<br>";
echo "Ele se repetiu ".$values[$keys[0]]." vezes.";

?>