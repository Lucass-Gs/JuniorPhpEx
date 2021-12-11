<?php
 
 function SeculoAno($ano){
   
    return ceil($ano / 100);
 }

 echo "Ano 1905 = século ".SeculoAno(1905);
 echo "<br>";
 echo "Ano 1700 = século ".SeculoAno(1700);

 

 ?>