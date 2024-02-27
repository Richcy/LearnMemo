<?php 

    require_once 'Computer.php';

    class Hp implements Computer{
        public function brand(){
            echo "HP";
        }
    }

    $brand = new Hp();
    $brand->brand();

?>