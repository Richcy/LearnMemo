<?php 
    namespace ObjectOriented;
    require_once 'Message.php';

    class Hp implements Computer{
        use Message;
        public function brand(){
            return "HP";
        }
    }

    $brand = new Hp();
    echo $brand->globalMessage()."\n";
    echo $brand->brand();

?>