<?php
class Pair{
    function sockMerchant($n, $arr) {
        $sum=0;
        $data = array_count_values($arr);
        foreach ($data as $datas=>$value) {
            if ($value > 1) {
                $sum += $value / 2;
            }
        }
        echo  "Total number of pairs = ".(int)$sum . "\n";
        }

}
$n= 7;
$arr =[10,20 ,20 ,10 ,10, 30, 50, 10, 20,20,5];
$obj= new Pair;
$result = $obj->sockMerchant($n,$arr);
echo $result;
