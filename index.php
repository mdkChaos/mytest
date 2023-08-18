<?php
    $flag = true;
    $iteration = 100000000;
    $start_time = hrtime(true);

    // Ваш код або функція, яку ви хочете виміряти
    for ($i=0; $i < $iteration; $i++) { 
        unset($flag);
    }
    
    $end_time = hrtime(true);
    $execution_time_ns = $end_time - $start_time;
    $execution_time_s = $execution_time_ns / 1e9; // перетворення наносекунд у секунди
    
    echo "Час виконання: " . $execution_time_s . " секунд";
    echo "<br>";

    $flag = true;
    $start_time = hrtime(true);

    // Ваш код або функція, яку ви хочете виміряти
    for ($i=0; $i < $iteration; $i++) { 
        $flag = null;
    }
    
    $end_time = hrtime(true);
    $execution_time_ns = $end_time - $start_time;
    $execution_time_s = $execution_time_ns / 1e9; // перетворення наносекунд у секунди
    
    echo "Час виконання: " . $execution_time_s . " секунд";
    echo "<br>";
