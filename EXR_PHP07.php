<?php

/*Crie as soluções abaixo utilizando estruturas de repetição de acordo com sua escolha:
Faça um algoritmo em PHP que receba um valor qualquer e imprima os valores de 0 até o valor recebido, exemplo: 
• Valor recebido = 9 
• Impressão do programa – 0 1 2 3 4 5 6 7 8 9

Faça um algoritmo PHP que receba um valor qualquer e calcule o seu fatorial (!), sabendo que fatorial de um número é: 7! = 7*6*5*4*3*2*1 4! = 4*3*2*1

Faça um algoritmo PHP que receba dois valores quaisquer e imprime todos os valores intermediários a ele, veja exemplo: Primeiro Valor = 5 Segundo Valor = 15 Imprime: 6 7 8 9 10 11 12 13 14

Desafio, pesquise. Faça um algoritmo PHP que receba uma string, encontre o número total de caracteres desta e imprima todos os números que existem entre 0 e o número total, exemplo: 

* string = “Gil Eduardo de Andrade” 
* total_caracter = 22 
   Imprime: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21
   
 */
 for ($valorRecebido=0; $valorRecebido<= 9; $valorRecebido++){
  echo "$valorRecebido" . "\n";
 }

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$calc = 1;
$i = 7;

while ($i > 1){
    $calc *= $i;
    $i--;
  }

echo $calc;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$valorUm = 5;
$valorDois = 15;

while ( $valorUm < $valorDois-1){
  $valorUm ++;
  echo $valorUm."\n";
} 

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$contador = 'Programação Web';
$contatdorInicial=0;

$contatorFinal = mb_strlen($contador);

while ($contatdorInicial < $contatorFinal-1){
  $contatdorInicial ++;

  echo $contatdorInicial."\n";
}
echo "<br>";
echo $contador."<br>";
echo $contatorFinal."\n";

 
?>