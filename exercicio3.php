<?php
// Leitura da entrada
$input = trim(fgets(STDIN));
if (!$input || count(explode(' ', $input)) < 2) {
    exit("Erro: Entrada inválida\n");
}
list($N, $H) = array_map('intval', explode(' ', $input));

$alturasInput = trim(fgets(STDIN));
if (!$alturasInput) {
    exit("Erro: Entrada inválida\n");
}
$alturas = array_map('intval', explode(' ', $alturasInput));

if (count($alturas) != $N) {
    exit("Erro: Número incorreto de alturas fornecidas\n");
}

// Contar brinquedos que Carlitos pode aproveitar
$count = 0;
foreach ($alturas as $altura) {
    if ($H >= $altura) {
        $count++;
    }
}

// Exibir o resultado
echo "$count\n";
?>