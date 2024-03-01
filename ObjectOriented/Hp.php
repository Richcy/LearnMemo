<?php 
    namespace ObjectOriented; // Declare the namespace for the Hp class
    require_once 'Message.php'; // Include the Message trait file

    // Define the Hp class which implements the Computer interface and uses the Message trait
    class Hp implements Computer{
        use Message; // Use the Message trait in this class

        // Implementation of the brand method from the Computer interface
        public function brand(){
            return "HP";
        }
    }

    // Create an instance of the Hp class
    $brand = new Hp();
    // Echo the result of the globalMessage method from the Message trait
    echo $brand->globalMessage()."\n";
    // Echo the result of the brand method from the Hp class
    echo $brand->brand();
?>
