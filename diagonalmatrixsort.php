<?php
function sortDiagonal($matrix)
{
    $diagonal = array(); // Масив для збереження елементів бічної діагоналі

    $size = count($matrix);

    // Витягуємо елементи бічної діагоналі
    for ($i = 0; $i < $size; $i++) {
        $diagonal[] = $matrix[$i][$size - $i - 1];
    }

    // Сортуємо елементи бічної діагоналі
    sort($diagonal);

    // Підставляємо відсортовані елементи назад у матрицю
    for ($i = 0; $i < $size; $i++) {
        $matrix[$i][$size - $i - 1] = array_pop($diagonal);
    }

    return $matrix;
}

$matrix = array(
    array(23, 87, 98, 40),
    array(48, 56, 75, 95),
    array(15, 10, 56, 48),
    array(21, 15, 26, 75)
);

$sortedMatrix = sortDiagonal($matrix);

echo "<pre>";

foreach ($sortedMatrix as $row) {
    echo implode(' ', $row) . PHP_EOL;
}
