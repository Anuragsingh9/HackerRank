<?php
class Sort{

    public function sortInAscendingOrder(){

        $arrays = ['1','2','3','4','8','10'];
        sort($arrays);
        $max = max($arrays);
        $min = min($arrays);
        echo "Largest number is: ". $max .'</br>';
        echo "Smallest number is : ".$min;
    }

    public function swapNumbers(){
        $arrays = ['11','12','13','14','15','18'];
        $keys = array_keys($arrays);
        $count = count($arrays);
        $min = min($keys);
        $max = max($keys);
        $first = $arrays[$min];
        for ($i=0; $i < $count; $i++){
            if ($i == $max){
                $arrays[$i] = $first;
            }else{
                $arrays[$i] = $arrays[$i + 1];
            }
        }
        foreach ($arrays as $array){
            echo "After swaping array is :". $array."<br>";
        }
    }
}
$obj = new Sort;
//$result = $obj->sortInAscendingOrder();
$result = $obj->swapNumbers();