<?php
    $number = rand(0, 10000);
    $text = "Число $number :<br>";
    $result = null;
    echo $text;
    $result = ($number % 2 == 0) ? "четное <br>" : "нечетное <br>";
    echo $result;
    $result = ($number % 3 == 0) ? "делится на 3 <br>" : "не делится на 3 <br>";
    echo $result;
    $result = ($number % 6 == 0) ? "делится на 6 <br>" : "не делится на 6 <br>";
    echo $result;