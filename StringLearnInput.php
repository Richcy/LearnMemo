<?php 

    echo "\nWelcome to finding character within a paragraph!! by Richcy 15/02/2024\n\n";
    echo "Please enter your message first: ";
    $message = trim(readline());
    $lowermessage = strtolower($message);

    echo "Input the character you want to find: ";
    $character = trim(readline());
    $lowercharacter = strtolower($character);
    //echo $lowercharacter;
    
    $positions = [];
    $findchar = 0;
    $totaloccurance = substr_count($lowermessage, $lowercharacter);
    for($i = 0; $i < $totaloccurance; $i++){
        $findchar = strpos($lowermessage, $lowercharacter, $findchar);
        if($findchar !== false){
            $positions[] = $findchar + 1;
            $findchar++;
        }
    }
    echo "The character of '".$character."' is found ".$totaloccurance." times in this '".$message."' string.\n";
    echo "The character '".$character."' is found at count of: ";
    echo (implode(", ", $positions)).".\n";
    echo "Program ended, Thank you!!\n\n";
    

?>