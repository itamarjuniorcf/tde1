<?php
// Leitura da entrada
$C = intval(trim(fgets(STDIN))); // Capacidade da cabine
if ($C < 2 || $C > 100) {
    exit("Erro: Capacidade da cabine fora do intervalo permitido (2 ≤ C ≤ 100)\n");
}

$A = intval(trim(fgets(STDIN))); // Número de alunos
if ($A < 1 || $A > 1000) {
    exit("Erro: Número de alunos fora do intervalo permitido (1 ≤ A ≤ 1000)\n");
}

// Como deve haver pelo menos um monitor, a cada viagem só podem ir (C-1) alunos
$alunosPorViagem = $C - 1;

// Calcular o número mínimo de viagens
$viagens = ceil($A / $alunosPorViagem);

// Exibir o resultado
echo "$viagens\n";
?>