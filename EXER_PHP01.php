<?php 

/* 1- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse
valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou
"Igual a Zero".*/

$numero = -1;

if($numero > 0){
    $retorno = "O número dado pelo usuário é positivo e maior que 0.";
} elseif($numero < 0){
    $retorno = "O número dado pelo usuário é negativo e menor que 0.";
} else {
    $retorno = "O número dado pelo usuário é igual a 0.";
}

echo $retorno;

?>