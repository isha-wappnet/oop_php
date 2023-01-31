<?php
    class employ{
      public $name;
      public $designation;

      //function __construct(){
       // echo "this is my first constructor";
     // }
      function __construct($name,$designation){
        $this->name = $name;
        $this->designation = $designation;
      }


    }
    $emp1 = new employ("isha","intern");
    $emp2 = new employ("esha","php intern");
    echo"position of employ $emp1->designation <br>";
    echo"position of employ $emp2->designation<br>";
    echo"name of intern $emp1->name<br>";
    echo"name of intern $emp2->name<br>";

?>
