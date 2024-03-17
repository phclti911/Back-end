<?php
$x = readline("digite o valor de X ");
$y = readline("digite o Valor de Y ");
if($x>$y){
  for($cont=y+1;$cont<x;$cont++){
     if ($cont % 5 == 2 || $cont % 5 == 3){
       echo $cont;
     }
  }
}else if ($x<$y){
  for($cont=$x+1;$cont<$y;$cont++){
    if ($cont % 5 == 2 || $cont % 5 == 3){
      echo $cont;
    }
  }
}
         