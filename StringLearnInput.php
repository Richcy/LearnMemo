<?php 

    // Welcome message
    echo "\nWelcome to finding character or word within a paragraph!! by Richcy 15/02/2024\n\n";

    $continue = true;
    while($continue == true){
        // Entering the words and validate if input is empty or not.
        $message = "";
        while(empty(trim($message))){
            echo "Please enter your words first: ";
            $message = trim(readline());
            if(empty($message)){
                echo "Sorry! Message cannot be empty!\n";
            }
        }
        
        // Convert the message to lowercase for case insensitivity.
        $lowermessage = strtolower($message);

        // Prompt for input of the character or word to find.
        echo "Input the character or word you want to find: ";

        // Input the word and convert it to lowercase.
        $word = trim(readline());
        $lowerword = strtolower($word);

        // Array to store positions of the found character or word.
        $positions = [];
        $findword = 0;

        // Count how many times the character or word that the user wants to find appears in the message.
        $totaloccurance = substr_count($lowermessage, $lowerword);

        // Loop to find the positions of the character or word within the given message.
        for($i = 0; $i < $totaloccurance; $i++){
            // Find the position of the character or word in the message.
            $findword = strpos($lowermessage, $lowerword, $findword);
            
            // Check if the position is valid (not false), indicating that the character or word was found.
            // Ensure validation for the first character to prevent errors.
            if($findword !== false){
                // Add the position to the array of positions.
                $positions[] = $findword + 1; // Adding 1 to convert from 0-based index to 1-based index.
                // Increment the position to start searching from the next position in the message.
                $findword++;
            }
        }

        // Output the results
        if(!empty($positions)){
            // If positions array is not empty, meaning the character or word was found in the string
            echo "The ".(strlen($word) > 1 ? "word" : "character")." '".$word."' is found ".$totaloccurance." times in the string.\n";
            // Output the number of occurrences found
            echo "The position of '".$word."' is found at count of: ";
            // Output the positions where the character or word was found
            echo (implode(", ", $positions)).".\n";
        } else {
            // If positions array is empty, meaning the character or word was not found in the string
            echo "The ".(strlen($word) > 1 ? "word" : "character")." '".$word."' is not found in the string.\n";
            // Notify the user that the character or word was not found
        }
        
        $choice = "";
        // Prompt the user to continue with a new word
        echo "Do you want to continue with a brand new word? (Y/N)\n";
        while($choice != 'Y' && $choice != 'N' && $choice != 'y' && $choice != 'n'){
            // Validate user input
            if($choice != ""){
                // If user input is not empty, meaning it's not their first input attempt
                echo "Sorry! Wrong input try again! (Y/N)\n";
                // Notify the user of wrong input
            }
            $choice = trim(readline());
            // Read user input
        
            if($choice == 'Y' || $choice == 'y'){
                // If user chooses to continue with a new word
                $continue = true;
                // Set $continue to true
            } elseif($choice == 'N' || $choice == 'n'){
                // If user chooses not to continue with a new word
                $continue = false;
                // Set $continue to false
            }
        }
    }        

    // End of program message
    echo "Program ended, Thank you!!\n\n";
?>
