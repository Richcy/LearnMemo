<?php 

    Class Fruit{
        // Properties
        public $name;
        public $color;

        //Methods
        function set_name($name){
            $this->name = $name;
        }
    
        function get_name(){
            return $this->name;
        }

        function set_color($color){
            $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();
    $orange = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    $orange->set_name('Orange');
    $apple->set_color('Red');
    $banana->set_color('Yellow');
    $orange->set_color('Orange');
    var_dump($apple instanceof Fruit);

    echo "The ".$apple->get_name()."'s Color is ".$apple->get_color().".\n";
    echo "The ".$banana->get_name()."'s Color is ".$banana->get_color().".\n";
    echo "The ".$orange->get_name()."'s Color is ".$orange->get_color().".\n";

?>