<?php
    $message1 = "Kegiatan Jumat Bebersih RSUD Cimacan Asik";
    $message2 = "Project Learn Memo!";
    $lowermessage1 = strtolower($message1);
    $lengthmessage1 = strlen($message1);
    $countmessage1 = str_word_count($message1);
    $findmessage1 = strpos($message1, "a");
    $findmessage2 = strpos($message1, "a", ($findmessage1+1));
    $findmessage3 = strpos($message1, "a", ($findmessage2+1));

    echo $lengthmessage1."\n";
    echo $countmessage1."\n";
    echo $findmessage1."\n";
    echo $findmessage2."\n";
    echo $findmessage3."\n";

    #Try find every position of character "a" in $message1 

    $positions = [];
    $findchar = 0;
    $loopstr = substr_count($lowermessage1, "a");
    echo "The character a is found ".$loopstr." times in '".$message1."' string.\n";
    echo "The position are on this each count: ";
    for($i = 0; $i < $loopstr; $i++){
       $findchar = strpos($lowermessage1, "a", $findchar + 1);
       $positions[] = $findchar + 1;
    }

    echo (implode(", ",$positions).".");
    
 ?>