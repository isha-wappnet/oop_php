<?php
    class Animal
    {
        public $name;
        //public $type;

        function setName($name){

            $this->name=$name;
        }
        function getName(){

            return $this->name;
        }

    }
        $x = new Animal();
        $x->setName("lion");
        echo  $x->getName();

        $x1 = new Animal();
        $x1 ->setName("tiger");
        echo  $x1 ->getName();


    

?>