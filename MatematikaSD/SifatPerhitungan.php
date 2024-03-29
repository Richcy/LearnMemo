<?php 

    $totalNumbers = 0;

    echo "Masukkan jumlah angka anda (minimal 3, maksimal 5): ";
    $totalNumbers = trim(readline());

    // Check if the input is within the allowed range
    if($totalNumbers >= 3 && $totalNumbers <= 5){
        echo "Masukkan angka - angka Anda:\n";
        $inputs = [];

        // Accept input numbers from the user
        for ($i = 0; $i < $totalNumbers; $i++) {
            echo ($i + 1) . ". ";
            $inputs[] = trim(readline());
        }
    } else {
        echo "Jumlah angka harus diantara 3 sampai 5!";
    }

    // Initialize variables for calculations
    $commutative = $inputs[0];
    $commutativeTimes = $inputs[0];
    $associative = $inputs[0];
    $associativeTimes = $inputs[0];
    $distributivePlusSum = 0;
    $distributiveMinusSum = 0;
    $pointer = 1;

    // Calculate commutative, associative, and distributive properties
    for ($i = 0; $i < count($inputs); $i++) {
        $commutative += $inputs[$i];
        $commutativeTimes *= $inputs[$i];
        $associative = $commutative;
        $associativeTimes = $commutativeTimes;

        // Check if pointer exceeds the array bounds
        if ($pointer < count($inputs)) {
            // Calculate and accumulate distributivePlus
            $distributivePlus = $inputs[0] * $inputs[$pointer];
            $distributivePlusSum += $distributivePlus;

            // Calculate and accumulate distributiveMinus
            $distributiveMinus = $inputs[0] * $inputs[$pointer];
            $distributiveMinusSum += $distributiveMinus;
            
            $pointer++;
        }
    }

    // Subtract the final sum of distributiveMinus from the initial distributiveMinus value
    $distributiveMinusSum = $distributiveMinus - $distributiveMinusSum;

    // Display input numbers
    echo "Anda memasukkan angka: " . implode(", ", $inputs) . "\n";
    echo "Dengan angka berikut, kita dapat melihat beberapa sifat untuk menghitung bilangan bulat.\n";

    // 1. Commutative Property of Addition
    echo "1. Sifat Komutatif Penjumlahan: ";

    // Constructing the commutative property expression
    $commutativeExpression = "";
    for ($i = 0; $i < count($inputs); $i++) {
        $commutativeExpression .= $inputs[$i];
        if ($i < count($inputs) - 1) {
            $commutativeExpression .= " + ";
        } else {
            $commutativeExpression .= " = ";
        }
    }

    // Constructing the reversed expression
    $reversedExpression = "";
    for ($i = count($inputs) - 1; $i >= 0; $i--) {
        $reversedExpression .= $inputs[$i];
        if ($i > 0) {
            $reversedExpression .= " + ";
        }
    }

    // Displaying the commutative property expression and result
    echo $commutativeExpression . $reversedExpression . " = " . $commutative . ".\n";

    // 2. Commutative Property of Multiplication
    echo "2. Sifat Komutatif Perkalian: ";

    // Constructing the commutative property expression
    $commutativeTimesExpression = "";
    for ($i = 0; $i < count($inputs); $i++) {
        $commutativeTimesExpression .= $inputs[$i];
        if ($i < count($inputs) - 1) {
            $commutativeTimesExpression .= " x ";
        } else {
            $commutativeTimesExpression .= " = ";
        }
    }

    // Constructing the reversed expression
    $reversedTimesExpression = "";
    for ($i = count($inputs) - 1; $i >= 0; $i--) {
        $reversedTimesExpression .= $inputs[$i];
        if ($i > 0) {
            $reversedTimesExpression .= " x ";
        }
    }

    // Displaying the commutative property expression and result
    echo $commutativeTimesExpression . $reversedTimesExpression . " = " . $commutativeTimes . ".\n";


    // 3. Associative Property of Addition
    echo "3. Sifat Asosiatif Penjumlahan: ";

    // Constructing the expression with parentheses
    $associativeExpression = "";
    for ($i = 0; $i < count($inputs) - 1; $i++) {
        $associativeExpression .= "(" . $inputs[$i] . " + ";
    }
    $associativeExpression .= $inputs[count($inputs) - 1]; // Last number without addition symbol
    for ($i = 0; $i < count($inputs) - 1; $i++) {
        $associativeExpression .= ")";
    }

    // Displaying the associative property expression and result
    echo $associativeExpression . " = " . $associative . "\n";

    // 4. Associative Property of Multiplication
    echo "4. Sifat Asosiatif Perkalian: ";

    // Constructing the expression with parentheses
    $associativeTimesExpression = "";
    for ($i = 0; $i < count($inputs) - 1; $i++) {
        $associativeTimesExpression .= "(" . $inputs[$i] . " x ";
    }
    $associativeTimesExpression .= $inputs[count($inputs) - 1]; // Last number without addition symbol
    for ($i = 0; $i < count($inputs) - 1; $i++) {
        $associativeTimesExpression .= ")";
    }

    // Displaying the associative property expression and result
    echo $associativeTimesExpression . " = " . $associativeTimes . "\n";


    // 5. Distributive Property of Multiplication over Addition
    echo "5. Sifat Distributif Perkalian terhadap Penjumlahan: ";

    // Constructing the expression with parentheses
    $distributiveExpression = $inputs[0] . " x (";
    for ($i = 1; $i < count($inputs) - 1; $i++) {
        $distributiveExpression .= $inputs[$i] . " + ";
    }
    $distributiveExpression .= $inputs[count($inputs) - 1] . ")";

    // Constructing the expanded expression
    $expandedExpression = "";
    for ($i = 1; $i < count($inputs); $i++) {
        $expandedExpression .= "(" . $inputs[0] . " x " . $inputs[$i] . ")";
        if ($i < count($inputs) - 1) {
            $expandedExpression .= " + ";
        }
    }

    // Displaying the distributive property expression and result
    echo $distributiveExpression . " = " . $expandedExpression . " = " . $distributivePlusSum . ".\n";


    // 6. Distributive Property of Multiplication over Subtraction
    echo "6. Sifat Distributif Perkalian terhadap Pengurangan: ";

    // Constructing the expression with parentheses
    $distributiveExpression = $inputs[0] . " x (";
    for ($i = 1; $i < count($inputs) - 1; $i++) {
        $distributiveExpression .= $inputs[$i] . " - ";
    }
    $distributiveExpression .= $inputs[count($inputs) - 1] . ")";

    // Constructing the expanded expression
    $expandedExpression = "";
    for ($i = 1; $i < count($inputs); $i++) {
        $expandedExpression .= "(" . $inputs[0] . " x " . $inputs[$i] . ")";
        if ($i < count($inputs) - 1) {
            $expandedExpression .= " - ";
        }
    }

    // Displaying the distributive property expression and result
    echo $distributiveExpression . " = " . $expandedExpression . " = " . $distributiveMinusSum . ".\n";

?>
