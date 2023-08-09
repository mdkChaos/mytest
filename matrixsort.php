<?php
$matrix = array(
    array(5, 3, 2),
    array(1, 8, 9),
    array(11, 53, 1)
);

$mergedArray = array_merge(...$matrix); // Об'єднання всіх елементів матриці в один масив
sort($mergedArray); // Сортування масиву

$sortedMatrix = array_chunk($mergedArray, count($matrix[0])); // Розділення відсортованого масиву на підмасиви

echo "<pre>";

foreach ($sortedMatrix as $row) {
    echo implode(' ', $row) . PHP_EOL;
}
