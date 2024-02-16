<?php 

// Welcome message
echo "\nWelcome to determine data type of a number!! by Richcy 16/02/2024\n\n";

// Variable to control the loop
$continue = true;
while($continue == true){
    // Prompt the user to enter a number
    echo "Please enter your number: ";
    // Read user input and remove leading/trailing whitespace
    $input = trim(readline());
    // Check if input contains a comma and replace it with a dot if found
    if(!empty(strpos($input, ','))){
        $input = str_replace(',', '.', $input);
        echo "Your input does use a comma (,) so we replace it into dot (.)\n";
    }
    // Check if input is numeric
    if(is_numeric($input)){
        // Convert input to float if it contains a dot, otherwise convert to integer
        if(!empty(strpos($input, '.'))){
            $number = (float)$input;
        }
        else{
            $number = (int)$input;
        }

        // Determine if the number is an integer or a float
        $isint = is_int($number);
        $isfloat = is_float($number);

        // Determine if the number is finite or infinite
        $isfinite = is_finite($number);
        $isnan = is_nan($number);

        // Output the data type of the number
        if($isint){
            echo $number." is an int.\n";
        }
        else{
            echo $number." is not an int.\n";
        }

        if($isfloat){
            echo $number." is a float.\n";
        }
        else{
            echo $number." is not a float.\n";
        }

        if($isfinite){
            echo $number." is a finite number.\n";
        }
        else{
            echo $number." is an infinite number.\n";
        }

        if($isnan){
            echo $number." is not a number.\n";
        }
        else{
            echo $number." is a number.\n";
        }

        // Prompt the user if they want to continue with a new number
        $choice = "";
        echo "Do you want to continue with a brand new number? (Y/N)\n";
        while($choice != 'Y' && $choice != 'N' && $choice != 'y' && $choice != 'n'){
            if($choice != ""){
                echo "Sorry! Wrong input try again! (Y/N)\n";
            }
            // Read user choice
            $choice = trim(readline());

            // Set $continue based on user choice
            if($choice == 'Y' || $choice == 'y'){
                $continue = true;
            } elseif($choice == 'N' || $choice == 'n'){
                $continue = false;
            }
        }
    }
    else{
        // Inform the user if input is not numeric
        echo "Your input is not a number.\n";
        echo "Please Try Again!\n";
    }
}

// End of program message
echo "Program ended, Thank you!!\n\n";
    
?>
