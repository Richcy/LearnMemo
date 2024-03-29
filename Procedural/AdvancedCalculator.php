<?php 

    // All Functions

    // Function to get a valid total number of calculations
    function getValidTotalNumbers() {
        // Flag to check if the total number input is numeric
        $isNumber = false;

        // Loop to ensure valid input for total number of calculations
        while (!$isNumber || intval($totalNumbers) != $totalNumbers) {
            // Prompt the user to enter the total numbers
            echo "Please enter how many numbers that you want to calculate (up to 10): \n";
            $totalNumbers = trim(readline());
            $isNumber = is_numeric($totalNumbers);
            
            if (!$isNumber) {
                echo "Invalid input! Please enter a valid integer for the total number.\n";
            } elseif (intval($totalNumbers) != $totalNumbers) {
                echo "Invalid input! Please enter a whole number (integer).\n";
                $isNumber = false; // Set $isNumber to false to continue the loop
            }
        }
        
        // Convert totalNumbers to integer
        return (int) $totalNumbers;        
    }

    // Function to replace comma with dot in user input
    function replaceCommaWithDot($input) {
        $modifiedInput = [];

        for ($i = 0; $i < count($input); $i++) {
            $number = $input[$i];
            // Check if the number contains a comma
            if (strpos($number, ',') !== false) {
                // Replace comma with dot and convert to float
                $number = (float) str_replace(',', '.', $number);
            } else {
                // Convert to float if it contains a dot
                if (strpos($number, '.') !== false) {
                    $number = (float) $number;
                } else {
                    $number = (int) $number;
                }
            }
            // Add the modified number to the array
            $modifiedInput[] = $number;
        }

        return $modifiedInput;
    }

    // Function to get user input numbers and replace comma with dot if necessary
    function getInput($totalNumbers) {
        echo "Please enter your numbers that you want to calculate: \n";
        $input = [];
        $useComma = false;

        for ($i = 0; $i < $totalNumbers; $i++) {
            echo ($i + 1) . ". "; // Prompt for input number
            // Loop until valid numeric input is provided
            while (true) {
                $number = trim(readline()); // Read user input and remove leading/trailing whitespace
                
                // Call replaceCommaWithDot function to replace commas with dots
                $modifiedNumber = replaceCommaWithDot([$number]);
                
                // Access the first element of the returned array
                $sanitizedNumber = $modifiedNumber[0];
                
                // Check if input is numeric
                if (is_numeric($sanitizedNumber)) {
                    // Add numeric input to the array
                    $input[] = $sanitizedNumber;
                    // Check if the number contains a comma
                    if (strpos($number, ',') !== false) {
                        $useComma = true;
                    }
                    break; // Exit the loop if input is numeric
                } else {
                    // Notify user and prompt again if input is not numeric
                    echo "Invalid input! Please enter a numeric value for this number.\n";
                    echo ($i + 1) . ": ";
                }
            }   
        }
        
        if ($useComma) {
            echo "Your input(s) contained comma(s) (,). We have replaced them with dot(s) (.) for calculation.\n";
        }

        return $input;
    }

    // Function to perform calculations on user input numbers
    function performCalculations($modifiedInput) {
        // Check if input is numeric
        foreach ($modifiedInput as $number) {
            if (!is_numeric($number)) {
                echo "Your input(s) is not a number.\n";
                echo "Please Try Again!\n";
                return;
            }
        }

        // Initialize variables for calculations
        $addition = $modifiedInput[0];
        $subtraction = $modifiedInput[0];
        $division = $modifiedInput[0];
        $multiplication = $modifiedInput[0];

        // Perform calculations
        for ($i = 0; $i < count($modifiedInput) - 1; $i++) {
            $addition = $addition + $modifiedInput[$i+1];
            $subtraction = $subtraction - $modifiedInput[$i + 1];
            if ($modifiedInput[$i + 1] != 0) {
                $division = $division / $modifiedInput[$i + 1];
            } else {
                $division = "Division by zero";
                break;
            }
            
            $multiplication = $multiplication * $modifiedInput[$i+1];
        }

        return [$addition, $subtraction, $division, $multiplication];
    }

    // Function to display results of calculations
    function displayResults($modifiedInput, $results) {
        echo "The result for advanced calculation from ";
        echo implode(", ", $modifiedInput). " is: \n";
        echo "1. Addition: " . $results[0] . ".\n";
        echo "2. Subtraction: " . $results[1] . ".\n";
        echo "3. Division: " . $results[2] . ".\n";
        echo "4. Multiplication: " . $results[3] . ".\n";
    }

    // Function to prompt user if they want to continue
    function continueProgram($continue) {
        $choice = "";
        echo "Do you want to continue with a brand new number? (Y/N)\n";
        while ($choice != 'Y' && $choice != 'N' && $choice != 'y' && $choice != 'n') {
            if ($choice != "") {
                echo "Sorry! Wrong input try again! (Y/N)\n";
            }
            // Read user choice
            $choice = trim(readline());

            // Handle empty or whitespace input
            if (empty($choice)) {
                echo "Empty input detected. Please enter 'Y' or 'N'.\n";
                continue; // Restart the loop to prompt for input again
            }

            // Set $continue based on user choice
            if ($choice == 'Y' || $choice == 'y') {
                $continue = true;
            } elseif ($choice == 'N' || $choice == 'n') {
                $continue = false;
            }
        }
        return $continue;
    }

    // Main Program

    // Welcome message
    echo "\nWelcome to advanced calculator!! by Richcy 17/02/2024\n\n";

    // Variable to control the loop
    $continue = true;

    // Main loop to continue or exit the program
    while ($continue) {
        
        // Get valid total numbers for calculations
        $totalNumbers = getValidTotalNumbers();

        // Check if totalNumbers is within the valid range
        if ($totalNumbers <= 10 && $totalNumbers >= 2) {
            $input = getInput($totalNumbers);
            $results = performCalculations($input);
            displayResults($input, $results);
            $continue = continueProgram($continue);
        } else {
            echo "Your total number cannot exceed than 10 numbers and cannot be less than 2 numbers!!.\n";
            echo "Please Try Again!\n";
        }
    }

    // End of program message
    echo "Program ended, Thank you!!\n\n";

?>
