<?php 
    // Welcome message
    echo "\nWelcome to simple calculator!! by Richcy 17/02/2024\n\n";

    // Variable to control the loop
    $continue = true;

    // Main loop to continue or exit the program
    while ($continue) {
        // Prompt the user to enter two numbers
        echo "Please enter your 2 numbers that you want to calculate: \n";

        // Flag to track if comma is used in input
        $useComma = false;

        // Loop to read user input for two numbers
        for ($i = 0; $i < 2; $i++) {
            echo ($i + 1) . ". "; // Prompt for input number 1 or 2
            $input[$i] = trim(readline()); // Read user input and remove leading/trailing whitespace

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
        for ($i = 0; $i < 2; $i++) {
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
        if ($numericInput) {
            $addition = $number[0] + $number[1];
            $subtraction = $number[0] - $number[1];
            $division = $number[0] / $number[1];
            $multiplication = $number[0] * $number[1];

            echo "The result for simple calculation from " . $number[0] . " and " . $number[1] . " is: \n";
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
        } else {
            // Inform the user if input is not numeric
            echo "Your input is not a number.\n";
            echo "Please Try Again!\n";
        }
    }

    // End of program message
    echo "Program ended, Thank you!!\n\n";

?>