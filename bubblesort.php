<?php
//ChatGPT
function bubbleSort(array $arr): array
{
    $length = count($arr);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            // Порівнюємо сусідні елементи і міняємо їх місцями, якщо вони не впорядковані
            if ($arr[$j] > $arr[$j + 1]) {
                // Міняємо місцями
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

//My
function bubbleSort2(array $arr): array
{
    $len = count($arr) - 1;
    for ($i = 0; $i < $len; $i++) {
        for ($j = $i; $j < $len; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

// Приклад використання
$myArray = array(64, 34, 25, 12, 22, 11, 90);
$sortedArray = bubbleSort($myArray);
$sortedArray2 = bubbleSort2($myArray);
echo "<pre>";
print_r($sortedArray);
print_r($sortedArray2);
