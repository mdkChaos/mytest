<?php
    
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        
        // Перевірка дільників з 2 до квадратного кореня з числа
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; // Знайдено дільник, число не є простим
            }
        }
        
        return true; // Число є простим
    }
    
    $lower_limit = 2;
    $upper_limit = 100000;
    $nums = [];
    
    $start_time = hrtime(true);

    // Ваш код або функція, яку ви хочете виміряти
    for ($num = $lower_limit; $num <= $upper_limit; $num++) {
        if (isPrime($num)) {
            array_push($nums, $num);
        }
    }
    
    $end_time = hrtime(true);
    $execution_time_ns = $end_time - $start_time;
    $execution_time_s = $execution_time_ns / 1e9; // перетворення наносекунд у секунди
    echo "<br>";
    echo "Час виконання: " . $execution_time_s . " секунд";
    echo "<br>";
    echo "Прості числа в діапазоні від $lower_limit до $upper_limit:";
    echo "<br>";
    foreach($nums as $num)
    {
        echo "$num ";
    }