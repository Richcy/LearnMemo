<?php
    $number1 = 798.9;
    $number2 = 123;
    $number3 = "7711";
    $convert1 = (int)$number1;
    $convert2 = (float)$number1;
    $convert3 = (string)$number2;
    $convert4 = (bool)$number3;
    $convert5 = (array)$number1;
    $convert6 = (object)$number3;
    # Fatal error: The (unset) cast is no longer supported
    # $convert7 = (unset)$number3;
    unset($number3);
    echo $convert1."\n";
    echo $convert2."\n";
    echo $convert3."\n";
    echo $convert4."\n";
    echo implode(',',$convert5)."\n";
    echo var_dump($convert6)."\n";
    var_dump($number3);
?>