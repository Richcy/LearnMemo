<?php 
    namespace ObjectOriented; // Declare the namespace for the Message trait

    // Define a trait named Message
    trait Message{
        // Method within the trait
        function globalMessage(){
            echo "This is a trait message";
        }
    }
?>
