<?php
$nota = readline ("Digite sua nota de 0 a 10: ");

if ($nota >= 7){
	echo "Você foi APROVADO, divirta-se nas férias!\n";
} elseif($nota >= 5 && $nota <= 6.9){
	echo "Férias? Não, RECUPERAÇÃO, estude mais ano que vem!\n";
} else {
	echo "Xii, alguém vai ter que voltar pra minha sala, REPROVADO!!\n";
}

?>
