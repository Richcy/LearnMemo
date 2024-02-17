<?php 
    // Welcome message
    echo "\nWelcome to advanced calculator!! by Richcy 17/02/2024\n\n";

    // Variable to control the loop
    $continue = true;

    // Main loop to continue or exit the program
    while ($continue) {
        
        // Flag to check if the total number input is numeric
        $isNumber = false;
        
        // Loop to ensure valid input for total number of calculations
        while(!$isNumber){
            // Prompt the user to enter the total numbers
            echo "Please enter how many numbers that you want to calculate (up to 10): \n";
            $totalNumbers = trim(readline());
            $isNumber = is_numeric($totalNumbers);
            if($isNumber){
                $isNumber = true;
            }
            else{
                echo "Invalid input! Please enter a valid integer for the total number.\n";
            }
        }
        // Convert totalNumbers to integer
        $totalNumbers = (int)$totalNumbers;

        // Check if totalNumbers is within the valid range
        if($totalNumbers <= 10 && $totalNumbers >= 2){

            // Prompt the user to enter numbers
            echo "Please enter your numbers that you want to calculate: \n";

            // Flag to track if comma is used in input
            $useComma = false;
            $input = [];

            // Loop to read user input for each number
            for ($i = 0; $i < $totalNumbers; $i++) {
                echo ($i + 1) . ". "; // Prompt for input number
                $input[$i] = trim(readline()); // Read user input and remove leading/trailing whitespace
                
                // Check if input contains more than one comma
                $totalComma = substr_count($input[$i], ',');
                while ($totalComma > 1){
                    echo "Sorry! Your input does have more than 1 commas\n";
                    echo "Please try again with this number\n";
                    echo ($i + 1) . ". "; // Prompt for input number
                    $input[$i] = trim(readline()); // Read user input and remove leading/trailing whitespace
                    $totalComma = substr_count($input[$i], ',');
                }
                // Check if input contains a comma and replace it with a dot if found
                if (!empty(strpos($input[$i], ','))) {
                    $input[$i] = str_replace(',', '.', $input[$i]);
                    $useComma = true; // Set flag to true if comma is used
                }
            }

            // Notify user if comma is replaced with dot in the input
            if ($useComma) {
                echo "Your input(s) does use a comma (,) so we replace it into dot (.)\n";
            }

            // Check if input is numeric
            $numericInput = true; // Initialize flag for numeric input
            for ($i = 0; $i < count($input); $i++) {
                if (!is_numeric($input[$i])) {
                    $numericInput = false; // Set flag to false if input is not numeric
                    break;
                } else {
                    // Convert input to float if it contains a dot, otherwise convert to integer
                    if (!empty(strpos($input[$i], '.'))) {
                        $number[$i] = (float) $input[$i];
                    } else {
                        $number[$i] = (int) $input[$i];
                    }
                }
            }

            // If inputs are numeric, perform calculations and display results
            $addition = $number[0];
            $subtraction =  $number[0];
            $division = $number[0];
            $multiplication = $number[0];
            if ($numericInput) {
                for($i = 0; $i < count($input) - 1; $i++){
                    $addition = $addition + $number[$i+1];
                    $subtraction = $subtraction - $number[$i + 1];
                    if ($number[$i + 1] != 0){
                        $division = $division / $number[$i + 1];
                    }
                    else{
                        $division = "Division by zero";
                        break;
                    }
                    
                    $multiplication = $multiplication * $number[$i+1];
                }

                // Display the results
                echo "The result for advanced calculation from ";
                echo implode(" and ", $input). " is: \n";
                echo "1. Addition: " . $addition . ".\n";
                echo "2. Subtraction: " . $subtraction . ".\n";
                echo "3. Division: " . $division . ".\n";
                echo "4. Multiplication: " . $multiplication . ".\n";

                // Prompt the user if they want to continue with a new set of numbers
                $choice = "";
                echo "Do you want to continue with a brand new number? (Y/N)\n";
                while ($choice != 'Y' && $choice != 'N' && $choice != 'y' && $choice != 'n') {
                    if ($choice != "") {
                        echo "Sorry! Wrong input try again! (Y/N)\n";
                    }
                    // Read user choice
                    $choice = trim(readline());

                    // Set $continue based on user choice
                    if ($choice == 'Y' || $choice == 'y') {
                        $continue = true;
                    } elseif ($choice == 'N' || $choice == 'n') {
                        $continue = false;
                    }
                }
            } 
            else {
                // Inform the user if input is not numeric
                echo "Your input(s) is not a number.\n";
                echo "Please Try Again!\n";
            }
        }
        else{
            // Notify the user if the total number input is out of range
            echo "Your total number cannot exceed than 10 numbers and cannot be less than 2 numbers!!.\n";
            echo "Please Try Again!\n";
        }
    }

    // End of program message
    echo "Program ended, Thank you!!\n\n";

?>