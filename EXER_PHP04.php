<?php 
/*4 - Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número
seja fora desse intervalo, informar que não existe mês com este número. Exigência, resolva esse
exercício utilizando array.*/


$numero[1] = "Janeiro";
$numero[2] = "Fevereiro";
$numero[3] = "Março";
$numero[4] = "Abril";
$numero[5] = "Maio";
$numero[6] = "Junho";
$numero[7] = "Julho";
$numero[8] = "Agosto";
$numero[9] = "Setembro";
$numero[10] = "Outubro";
$numero[11] = "Novembro";
$numero[12] = "Dezembro";

$numeroUser = 9;

if ($numeroUser >= 1 && $numeroUser <= 12 ){
    echo $numero[$numeroUser];
} else {
    echo "Número invalido";   
}

?>