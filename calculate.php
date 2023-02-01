<?php
    $num1= $_POST['number1'];
    $num2= $_POST['number2'];
   // $num3= $_POST['number3'];
    $cal= $_POST['Calculate'];

     class Calculator{

       public $number1;
       public $number2;
      // public $number3;
       public $calculate;

        public function __construct($number1,$number2,$calculate){
            $this->number1= $number1;
            $this->number2= $number2;
           // $this->number3= $number3;
            $this->calculate= $calculate;

        }
        public function Calculate_Method(){
            switch($this->calculate){
                case'Addition':
                    $result = $this->number1+ $this->number2;
                    break;
                case'Subtraction':
                     $result = $this->number1 - $this->number2;
                     break;
                case'Multiplication':
                     $result = $this->number1 * $this->number2;
                     break;
                case'Division':
                     $result = $this->number1 / $this->number2;
                     break;
        }
        return $result;
    }
}
    $cal= new Calculator($num1,$num2,$cal);
     echo $cal->Calculate_Method();
?>