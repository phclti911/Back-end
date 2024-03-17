<?php
while(1){
  $aux;
  $soma;
  $x = readline("Digite o valor de X");
  if($x<=0) break;
  $y = readline("Digite o valor de Y");
  if($y<=0) break;
  if($x>$y){
    $aux=$x;
    $x=$y;
    $y=$aux;
    
  }
  $soma=0;
   for($i = $x; $i <= $y; $i++){
     echo "$i";
     $soma += $i;
   } 
  echo "Sum = $soma";
  
}