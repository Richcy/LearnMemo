<?php 

    function primeNumber(){
        $maxNumber = 17;

        for($number = 2; $number <= $maxNumber; $number++){
            $checkPrime = 0;
            for($divisor = 1; $divisor <= $number; $divisor++){
                if($number % $divisor == 0){
                    $checkPrime++;
                }
            }
            if($checkPrime == 2){
                echo $number." ";
            } else {
                //echo "This number is not prime ";
            }
        }
    }
    
    //$primeNumber = primeNumber();
    //echo $primeNumber;

    $number = 60;
    $prime2 = 0;
    while ($number){
        if($number % 2 == 0){
            $number = $number / 2;
            echo $number." ";
            $prime2++;
        } else {
            break;
        }
    }
    echo $prime2."\n";

    $prime3 = 0;
    while ($number){
        if($number % 3 == 0){
            $number = $number / 3;
            echo $number." ";
            $prime3++;
        } else {
            break;
        }
    }
    echo $prime3."\n";

    $prime5 = 0;
    while ($number){
        if($number % 5 == 0){
            $number = $number / 5;
            echo $number." ";
            $prime5++;
        } else {
            break;
        }
    }
    echo $prime5."\n";
  
?>
