<?php 
    // Include the Fruit class file
    require_once 'Fruit.php';

    // Define the Pineapple class which extends Fruit
    Class Pineapple extends Fruit{
        // Define a method called get_message
        function get_message(){
            // Echo an introductory message
            echo $this->intro();
            // Echo a question
            echo "Am i a berry or a fruit?\n";
            // Call the testAbstract method and store the result in $test
            $test = $this->testAbtract(75);
            // Return the value stored in $test
            return $test;
            // Alternatively, you could directly return the result of $this->testAbtract(75)
            //return $this->testAbtract(75);
        }

        // Define the testAbstract method which is declared as abstract in the parent class
        public function testAbtract($point)
        {
            // Check the value of $point and assign a number accordingly
            if($point == 100){
                $number = 1;
            } elseif($point == 90){
                $number = 2;
            } else{
                $number = 3;
            }
            // Return the concatenated string of $number and $point
            return $number.". ".$point;
        }
    }

    // Create an instance of the Pineapple class
    $pineapple = new Pineapple("Buah Nanas", "Kuning");

    // Call the get_message method and store the result in $message
    $message = $pineapple->get_message();
    // Call the get_name method and store the result in $name
    $name = $pineapple->get_name();
    // Call the testAbstract method with different values and store the results in $test1, $test2, $test3
    $test1 = $pineapple->testAbtract(80);
    $test2 = $pineapple->testAbtract(90);
    $test3 = $pineapple->testAbtract(100);

    // Output the results
    echo $message."\n";
    echo $name."\n";
    echo $test1."\n";
    echo $test2."\n";
    echo $test3."\n";
?>
