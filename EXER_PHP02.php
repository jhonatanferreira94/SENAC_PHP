<?php 
/*2 - Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente
em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica,
utilizem concatenação.*/

$a = $_POST["pnro"];
$b = $_POST["snro"];


if($a > $b){
    $resultado = "A é maior que B, sendo A repsentado pelo número " .$a. " e B representado pelo número " .$b. " .";
}else {
    $resultado = "B é maior que A, sendo A repsentado pelo número " .$b. " e B representado pelo número " .$a. " .";
}

echo  $resultado;
echo '<a href="EXER_PHP02.html"><input type="submit" value="Retornar"></a>';

?>