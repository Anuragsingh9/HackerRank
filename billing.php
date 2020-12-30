<?php

class Bill{

    public function calculateBill(){
            $totalCost = 12;
            $tipPercent = 20;
            $taxPercent = 8;
            $tip = $this->tipPercent($tipPercent,$totalCost);
            $tax = $this->taxPercent($taxPercent,$totalCost);
            $total = $totalCost + $tip + $tax;
        echo "Tip = ".$tip."\n";
        echo "Tax = ". $tax."\n";
        echo "Total Bill = ". round($total);
}
     public function tipPercent($tipPercent,$totalCost){
         return ($tipPercent * $totalCost) / 100;
     }

     public function taxPercent($taxPercent,$totalCost){
       return ($taxPercent * $totalCost) / 100;
     }
}
$obj = new Bill;
$result = $obj->calculateBill();