<?php
function permute(&$arr, $l, $r, &$maxConfidence, &$bestOrder, &$matrix) {
    if ($l == $r) {
        $confidence = 0;
        for ($i = 0; $i < count($arr); $i++) {
            // Use logarithms to avoid precision issues with very small numbers
            $confidence += log($matrix[$arr[$i]][$i]);
        }
        if ($confidence > $maxConfidence) {
            $maxConfidence = $confidence;
            $bestOrder = $arr;
        }
    } else {
        for ($i = $l; $i <= $r; $i++) {
            swap($arr, $l, $i);
            permute($arr, $l + 1, $r, $maxConfidence, $bestOrder, $matrix);
            swap($arr, $l, $i);
        }
    }
}

function swap(&$arr, $i, $j) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

// Leitura da entrada
$N = intval(trim(fgets(STDIN)));
$matrix = [];
for ($i = 0; $i < $N; $i++) {
    $row = array_map('floatval', explode(' ', trim(fgets(STDIN))));
    $matrix[] = $row;
}

// Preparação da permutação
$enfeites = range(0, $N - 1);
$maxConfidence = -INF; // Initialize with negative infinity
$bestOrder = [];

// Gerar todas as permutações possíveis e encontrar a melhor
permute($enfeites, 0, $N - 1, $maxConfidence, $bestOrder, $matrix);

// Imprimir a melhor ordem encontrada
foreach ($bestOrder as $index) {
    echo ($index + 1) . " ";
}
echo "\n";
?>