<?php

abstract class Calculator {
    
    protected $num1;
    protected $num2;
    protected $num3;

    function __construct($num1, $num2, $num3){

        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
     }

    abstract function calc();
        
}

 class sum extends Calculator{
     
     public function calc(){

        return $this->num1+$this->num2+$this->num3;
     }
 }

 class avg extends Calculator{
     
     public function calc(){

        return ($this->num1+$this->num2+$this->num3)/3;

     }
 }

class mul extends Calculator{
     
     public function calc(){

        return $this->num1*$this->num2*$this->num3;

     }

}





