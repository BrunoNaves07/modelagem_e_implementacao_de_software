<?php

include_once 'Teste.php';

$teste = new Teste(2, 3);

echo "Valor de X: ".$teste->getValX()."<br>";
echo "Valor de Y: ".$teste->getValY()."<br>";
echo "Soma de X + Y: ".$teste->soma()."<br>";