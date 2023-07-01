<?php
    $mes = 2;

    $nomeMes[1] = "Janeiro";
    $nomeMes[2] = "Fevereiro";
    $nomeMes[3] = "Março";
    $nomeMes[4] = "Abril";
    $nomeMes[5] = "Maio";
    $nomeMes[6] = "Junho";
    $nomeMes[7] = "Julho";
    $nomeMes[8] = "Agosto";
    $nomeMes[9] = "Setembro";
    $nomeMes[10] = "Outubro";
    $nomeMes[11] = "Novembro";
    $nomeMes[12] = "Dezembro";

    if($mes > 12 || $mes < 1){
        $retorno = "Mês informado é inválido, o valor foi -> " . $mes;
    }else{
        $retorno = "O mês informado é " . $nomeMes[$mes];
    }

    echo $retorno;

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    
    echo "Usando FOR " . "<br>";
    for ($a = 1; $a < 13; $a++){
        echo $nomeMes[$a] . "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Usando WHILE " . "<br>";
    $a = 1;
    while ($a < 13){
        echo $nomeMes[$a] . "<br>";
        $a++;
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Usando DO WHILE " . "<br>";
    $a = 1;
    do {
        echo $nomeMes[$a] . "<br>";
        $a++;
    }while($a < 13);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Usando DO FOREACH " . "<br>"; 

    foreach($nomeMes as $mesAtual){
        echo "Nome do mês ->" .$mesAtual . "<br>";
    }
    

?>