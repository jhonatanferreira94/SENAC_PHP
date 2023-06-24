<?php 
/*2 - Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente
em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica,
utilizem concatenação.*/

$a = 8;
$b = 5;


if($a > $b){
    echo "A é maior que B, sendo A repsentado pelo número " .$a. " e B representado pelo número " .$b. " .";
}else {
    echo "B é maior que A, sendo A repsentado pelo número " .$b. " e B representado pelo número " .$a. " .";
}
?>