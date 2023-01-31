<?php
    class employ{
        public $name;
        public $place;
        function example($name,$place){
            $this->name=$name;
            $this->place=$place;
        }
        function __destruct(){
            echo "destruct call <br>";
        }
    }
    $e1= new employ("isha","kadi");
    $e2= new employ("esha","ahmedabad");
    $e3= new employ("sunny","ahmedabad");
    $e4= new employ("pallavi","ahmedabad");
    $e5= new employ("smruti","ahmedabad");
    $e6= new employ("sanjana","ahmedabad");
    

?>
