<?php 
/* 3 - Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada
de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior
ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final
calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]. */


$nota[0] = 5;
$nota[1] = 10;
$nota[2] = 4;

$mg = ($nota[0]+$nota[1]+$nota[2])/3;

echo "Nota final: " .round ($mg, 0)."<br>";

if($mg >= 6){
    echo "Status: Aprovado";

} else {
    echo "Status: Reprovado";
}

?>