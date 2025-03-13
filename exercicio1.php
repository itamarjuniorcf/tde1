<?php
// Lendo a entrada
do {
    echo "Digite a nota da primeira prova (0 a 100): ";
    $A = intval(trim(fgets(STDIN))); // Nota da primeira prova
} while ($A < 0 || $A > 100);

do {
    echo "Digite a média desejada entre as duas provas (0 a 100): ";
    $M = intval(trim(fgets(STDIN))); // Média entre as duas provas
} while ($M < 0 || $M > 100);

// Calculando a nota da outra prova
$B = 2 * $M - $A;

// Verificando se B está dentro do intervalo permitido
if ($B < 0 || $B > 100) {
    echo "Erro: Nota inválida\n";
} else {
    // Exibindo a saída
    echo "A nota da segunda prova deve ser: $B\n";
}
?>