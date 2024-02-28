<?php 
    namespace ObjectOriented;

    require_once 'Message.php';
    // Define an abstract class named Fruit
    abstract class Fruit {

        use Message;

        // Define a constant variable
        const RICHCY = "My Name is Richcy and I'm Learning OOP\n";

        // Properties of the class
        public $name; // Property to store the name of the fruit
        public $color; // Property to store the color of the fruit
        private $weight; // Private property to store the weight of the fruit
        public static $staticValue = 5;

        public static function exampleStatic(){
            return "This is a static funtion and static value is: ".self::$staticValue;
        }

        // Constructor method to initialize name and color properties
        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        // Destructor method
        function __destruct()
        {
            echo "Fruit destructor is called. ";
        }

        // Method to set the name of the fruit only if it's not already set
        function set_name($name){
            if (!isset($this->name)) {
                $this->name = $name; // Set the name only if it's not already set
            }
        }
    
        // Method to get the name of the fruit
        function get_name(){
            return $this->name; // Returning the name property of the current instance
        }

        // Method to set the color of the fruit
        function set_color($color){
            $this->color = $color; // Setting the color property of the current instance
        }

        // Method to get the color of the fruit
        function get_color() {
            return $this->color; // Returning the color property of the current instance
        }

        // Method to set the weight of the fruit
        public function set_weight($weight){
            $this->weight = $weight;
        }

        // Method to get the weight of the fruit
        public function get_weight(){
            return $this->weight;
        }

        // Protected method to provide an introductory message
        protected function intro(){
            return "Welcome to Object Oriented Programming with Fruit Class\n";
        }

        // Abstract method to be implemented by child classes
        abstract public function testAbtract($point);

        // Protected method to provide a test scenario
        protected function test(){

            // Creating new instances of the Fruit class
            $apple = new Fruit("Apple", "Red"); // Creating an instance for apple
            $banana = new Fruit("Banana", "Yellow"); // Creating an instance for banana
            $orange = new Fruit("Orange", "Orange"); // Creating an instance for orange

            // Setting names for each fruit
            $apple->set_name('Apple1');
            $banana->set_name('Banana1');
            $orange->set_name('Orange1');

            // Setting colors for each fruit
            $apple->set_color('Red1');
            $banana->set_color('Yellow1');
            $orange->set_color('Orange1');

            $apple->set_weight('50 grams');

            // Echo the constant variable
            echo self::RICHCY;

            // Using instanceof to check if $apple is an instance of Fruit class
            var_dump($apple instanceof Fruit); 

            // Printing out the name and color of each fruit
            echo "The ".$apple->get_name()."'s Color is ".$apple->get_color()." and its weight is ".$apple->get_weight().".\n";
            echo "The ".$banana->get_name()."'s Color is ".$banana->get_color().".\n";
            echo "The ".$orange->get_name()."'s Color is ".$orange->get_color().".\n";
        }
    }

    //$test = new Fruit("Fruit", "Color");
    //$test->test();

?>
