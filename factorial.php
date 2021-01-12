<?php

class Factorial{

    public function calculateFactorial(){
        $number = 5;
        $result = 1;
        for ($i = $number; $i > 0; $i--){
            $result = $result * $i;
        }
        echo "Factorial of $number is =".$result;
    }
}
$obj = new Factorial;
$result = $obj->calculateFactorial();