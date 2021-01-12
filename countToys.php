<?php
class Toys{

    public function countToys(){
        $price = 0;
        $maxBudget = 1000;
        $toysBought = 0;
        $toys = ['1','8','45','111','200','1000','10'];
        foreach ($toys as $toy){
                    $budget =($price + $toy);
                if($budget < $maxBudget){
                    if($toy <= $maxBudget){
                    $price += $toy;
                        $toysBought ++;
                }else{
                    break;
                }
            }
        }
        echo "Total money he spent= ". $price."<br>";
        echo "Total number of toys he bought= ".$toysBought;
    }
}
$obj = new Toys;
$result = $obj->countToys();