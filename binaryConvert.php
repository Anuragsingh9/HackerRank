<?php
class Binaryconverter{

    public function binaryConverters(){
        $number = 8;
        $dividend = $number;
        while($dividend >= 1){
            $binary = $dividend % 2;
            echo $binary."\n";
            $dividend = (int) ($dividend / 2);
        }
//        echo $binary;
    }
}
$obj = new Binaryconverter;
$result = $obj->binaryConverters();