<?php 

    // Function to generate prime numbers up to 1000
    function generatePrime(){
        $maxNumber = 1000;
        $primeNumbers = array();

        // Iterate through numbers from 2 to 1000
        for($number = 2; $number <= $maxNumber; $number++){
            $checkPrime = 0;
            
            // Check the number of divisors for each number
            for($divisor = 1; $divisor <= $number; $divisor++){
                if($number % $divisor == 0){
                    $checkPrime++;
                }
            }

            // If a number has exactly 2 divisors, it's a prime number
            if($checkPrime == 2){
                $primeNumbers[] = $number;
            }
        }
        
        return $primeNumbers; // Return the array of prime numbers
    }
    
    // Generate an array of prime numbers
    $primeNumber = generatePrime();

    echo "Masukkan bilangan bulat pertama: ";
    $input1 = trim(readline());
    echo "Masukkan bilangan bulat kedua: ";
    $input2 = trim(readline());

    $number1 = $input1;
    $number2 = $input2;

    // Initialize pointers for both numbers
    $pointer1 = 0;
    $pointer2 = 0;

    // Initialize arrays to store prime factors of both numbers
    $usedFactor1 = array();
    $usedFactor2 = array();

    // Iterate over factorization of both numbers simultaneously
    while ($number1 != 1 || $number2 != 1) {
        // Factorize first number
        if ($number1 != 1) {
            $primeFactor1 = $primeNumber[$pointer1];
            if ($number1 % $primeFactor1 == 0) {
                $number1 /= $primeFactor1;
                $usedFactor1[] = $primeFactor1;
            } else {
                $pointer1++;
            }
        }

        // Factorize second number
        if ($number2 != 1) {
            $primeFactor2 = $primeNumber[$pointer2];
            if ($number2 % $primeFactor2 == 0) {
                $number2 /= $primeFactor2;
                $usedFactor2[] = $primeFactor2;
            } else {
                $pointer2++;
            }
        }
    }

    // Output prime factors of both numbers
    echo "Faktorisasi prima dari bilangan ".$input1.": " . implode(" x ", $usedFactor1);
    if ($number1 == 1) {
        echo " x 1"; // Add factor of 1 to the output
    }
    echo "\n";

    echo "Faktorisasi prima dari bilangan ".$input2.": " . implode(" x ", $usedFactor2);
    if ($number2 == 1) {
        echo " x 1"; // Add factor of 1 to the output
    }
    echo "\n";

  // Initialize arrays to store counts of prime factors
    $countFactor1 = array();
    $countFactor2 = array();

    // Count occurrences of prime factors for number 1
    $numFactors1 = count($usedFactor1);
    for ($i = 0; $i < $numFactors1; $i++) {
        $factor = $usedFactor1[$i];
        if (isset($countFactor1[$factor])) {
            $countFactor1[$factor]++;
        } else {
            $countFactor1[$factor] = 1;
        }
    }

    // Count occurrences of prime factors for number 2
    $numFactors2 = count($usedFactor2);
    for ($i = 0; $i < $numFactors2; $i++) {
        $factor = $usedFactor2[$i];
        if (isset($countFactor2[$factor])) {
            $countFactor2[$factor]++;
        } else {
            $countFactor2[$factor] = 1;
        }
    }

    // Compare prime factors to find LCM and GCD
    $commonFactors = array(); // Array to store common prime factors

    // Find common prime factors
    $factorKeys1 = array_keys($countFactor1);
    $numFactors1 = count($factorKeys1);
    $factorKeys2 = array_keys($countFactor2);
    $numFactors2 = count($factorKeys2);

    // Iterate through prime factors of number 1
    for ($i = 0; $i < $numFactors1; $i++) {
        $factor = $factorKeys1[$i];
        $count1 = $countFactor1[$factor];
        if (isset($countFactor2[$factor])) {
            // Factor is common to both numbers
            $count2 = $countFactor2[$factor];
            $commonFactors[$factor] = min($count1, $count2); // Store the minimum count
        }
    }

    // Calculate LCM and GCD based on common factors
    $lcm = 1;
    $gcd = 1;

    // Iterate through common prime factors
    $commonFactorKeys = array_keys($commonFactors);
    $numCommonFactors = count($commonFactorKeys);

    // Calculate GCD
    for ($i = 0; $i < $numCommonFactors; $i++) {
        $factor = $commonFactorKeys[$i];
        $count = $commonFactors[$factor];
        
        // Calculate GCD: multiply each common factor raised to the minimum power
        $gcd *= $factor ** $count;
    }

    // Calculate LCM
    // Iterate through prime factors of number 1
    for ($i = 0; $i < $numFactors1; $i++) {
        $factor = $factorKeys1[$i];
        $count1 = $countFactor1[$factor];
        
        if (isset($countFactor2[$factor])) {
            // Factor is common to both numbers
            $count2 = $countFactor2[$factor];
            $maxCount = max($count1, $count2);
            $lcm *= $factor ** $maxCount;
        } else {
            // Factor only appears in number 1
            $lcm *= $factor ** $count1;
        }
    }

    // Iterate through prime factors of number 2
    for ($i = 0; $i < $numFactors2; $i++) {
        $factor = $factorKeys2[$i];
        $count2 = $countFactor2[$factor];
        
        if (!isset($countFactor1[$factor])) {
            // Factor only appears in number 2
            $lcm *= $factor ** $count2;
        }
    }

    // Output LCM and GCD
    echo "Kelipatan Persekutuan Terkecil (KPK) dari bilangan ".$input1." dan ".$input2." adalah $lcm\n";
    echo "Faktor Persekutuan Terbesar (FPB) dari bilangan ".$input1." dan ".$input2." adalah $gcd\n";


?>
