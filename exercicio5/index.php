<?php
$numero = 92.3;
echo "Parte inteira: " . number_format($numero) . "<br>";
$partereal = (string)$numero;
$cond = (strpos($partereal, '.') !== false) ? (strpos($partereal, '.') + 1) : "nada";
echo "Posição do ponto (indicador de número real): " . $cond;
$tamanho = strlen((string)$numero);

if ($cond != "nada") {
    echo "<br>Parte real: ";
    for ($i = $cond; $i < $tamanho; $i++) {
        echo $partereal[$i];
    }
} else {
    echo "<br>Parte real: nada";
}
?>
