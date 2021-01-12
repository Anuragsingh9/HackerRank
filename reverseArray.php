<?php
class Reverse{

    public function reverseArray(){
        $array = ['1','2','3','4','5','6'];
        $count = count($array);
        $arrayKey = array_keys($array);
        $max = max($arrayKey);
        for ($i = 0; $i< $count; $i++){
            $arrayKey[$i] = $array[$max];
            $max--;
        }
        echo "Reverse array is = ";
        foreach ($arrayKey as $reverseArray){
            echo $reverseArray."\n";
        }

    }
}
$obj = new Reverse;
$result = $obj->reverseArray();