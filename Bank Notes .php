<?php
$lista_de_notas = array(100, 50, 20, 10, 5, 2, 1);

$dinheiro = readline();

echo $dinheiro . "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  $dinheiro / $lista_de_notas[$i];

    echo (int) $count . " nota(s) de R$ " . $lista_de_notas[$i] . ",00\n";

    $dinheiro %= $lista_de_notas[$i];
}
?>


















