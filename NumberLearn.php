<?php
    
    $number1 = 89;
    $number2 = 632.5;
    $number3 = "777";
    $number4 = 3.4e511;
    $number5 = acos(5);

    /*echo "Please enter your number: ";
    $input = trim(readline());
    echo "Your input is: ".$input."\n";*/


    $check1 = is_int($number1);
    if(!empty($check1)){
        echo $number1." is an integer\n";
    }
    else{
        echo $check1." is not an integer\n";
    }
    
    $check2 = is_float($number2);
    if(!empty($check2)){
        echo $number2." is a float\n";
    }
    else{
        echo $number2." is not a float\n";
    }

    $check3 = is_finite($number3);
    if(!empty($check3)){
        echo $number3." is a finite\n";
    }
    else{
        echo $number3." is not a finite\n";
    }

    $check4 = is_infinite($number4);
    if(!empty($check4)){
        echo $number4." is an infinite\n";
    }
    else{
        echo $number4." is not an infinite\n";
    }

    $check5 = is_nan($number5);
    if(!empty($check5)){
        echo $number5." is a not a number\n";
    }
    else{
        echo $number5." is a number\n";
    }
 ?>