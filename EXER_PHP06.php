<?php
/*Crie as soluções abaixo utilizando a estrutura switch case:
    Elabore um algoritmo que leia dois valores do usuário e a operação que ele deseja executar (Operações: soma, subtração, divisão, multiplicação). Execute a operação desejada e mostre o resultado;
    
    Faça um algoritmo que aborde a seguinte situação: Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips. Faça um programa que calcule o valor total a ser pago por uma pessoa. O script deverá ler o valor total da compra e um código que identifique se o comprador é um cliente comum (1), funcionário (2) ou vip (3);
    
    Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra: 
    • salários até 300, reajuste de 50% 
    • salários maiores que 300, reajuste de 30%.*/

/*1.1*/

$a = 7;
$b = 8;
$tipo = "multiplicação";

switch ($tipo) {
    case "soma":
        $total = $a + $b;
        echo $a . "+" . $b . "=" . $total;
        break;

    case "subtração":
        $total = $a - $b;
        echo $a . "-" . $b . "=" . $total;
        break;

    case "divisão":
        $total = $a / $b;
        echo $a . "/" . $b . "=" . $total;
        break;

    case "multiplicação":
        $total = $a * $b;
        echo $a . "*" . $b . "=" . $total;
        break;

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/*1.2*/

$totalCompra = 300;
$codigoComprador = 1;

switch ($codigoComprador) {
    case 1:
        $total = $totalCompra;
        echo "O valor final da compra será R$" . $total;
        break;

    case 2:
        $total = $totalCompra - ($totalCompra * 15 / 100);
        echo "O valor final da compra será R$" . $total;
        break;

    case 3:
        $total = $totalCompra - ($totalCompra * 5 / 100);
        echo "O valor final da compra será R$" . $total;
        break;

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


/*1.3*/

$salario = 400;

if($salario > 350){
    $valor = true;
}else{
    $valor = false;
}

switch ($valor) {

    case true:
        $total = $salario + ($salario * (50 / 100));
        echo "O valor com o reajuste será R$" . $total;
        break;

    case false:
        $total = $salario + ($salario * (30 / 100));
        echo "O valor com o reajuste será R$" . $total;
        break;

}










?>