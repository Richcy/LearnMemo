<?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
$message1 = "Hello World!";
$message2 = "Nice";
$message3 = "Php Online \"Compiler\"?";
$message4 = "Python 'Certification' Online!";
$number1 = 25;
$number2 = 50;
$add = $number1 + $number2."\n";
$minus = $number1 - $number2."\n";
$div = $number1 / $number2."\n";
$times = $number1 * $number2."\n";
$result1 = $message1." ".$number1."\n";
$result2 = $message1." ".$message2."\n";
// Case 1: Slice string from index 4 and make it length of 6 characters.
// Explanation: Extracts a substring from the input string starting at index 4 and includes the next 6 characters.
$case1 = substr($message1, 4, 6);

// Case 2: Slice string from index 3 to the end of the string.
// Explanation: Extracts a substring from the input string starting at index 3 and includes all characters until the end of the string.
$case2 = substr($message1, 3);

// Case 3: Slice string from the end of index 2 to the end of the string.
// Explanation: Extracts a substring from the input string starting at the second-to-last character and includes all characters until the end of the string.
$case3 = substr($message1, -2);

// Case 4: Slice string from index 5 to 1 index before the end of the string.
// Explanation: Extracts a substring from the input string starting at index 5 and includes all characters up to one character before the end of the string.
$case4 = substr($message1, 5, -1);
$case5 = strtoupper($message1);
$case6 = strrev($message1);
$case7 = strtolower(strrev($message1));
$case8 = trim(strtoupper(substr($message3, 2)));
$case9 = substr($message4, 7, -8);
/*echo $result1;
echo $result2;
echo $add;
echo $minus;
echo $div;
echo $times;*/
echo $case1."\n";
echo $case2."\n";
echo $case3."\n";
echo $case4."\n";
echo $case5."\n";
echo $case6."\n";
echo $case7."\n";
echo $case8."\n";
echo $case9."\n";
?>