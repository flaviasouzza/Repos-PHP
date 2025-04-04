<?php

$horaAtual = (int) date("H");
$dia = "Bom dia";
$tarde = "Boa tarde";
$noite = "Boa noite"; 

if ($horaAtual  < 12){
	echo "Olá, $dia!\n";
} elseif ($horaAtual >=  12 && $horaAtual <= 18){
	echo "Olá, $tarde\n!";
} else{
	echo "Olá, $noite!\n";
}
?>
