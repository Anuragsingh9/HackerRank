<?php
class Repeat{

    public function repeatChar(){
        $string = "abcfaafaaafagagageagageryanwag";
        $count = 30;
        $j = 0;

        for ($i=0; $i<= $count -1; $i++){
            if($string[$i] == 'a'){
                $j++;
            }
        }
        echo "Total number of appeareance of A is = ".$j;
    }
}
$obj = new Repeat;
$result = $obj->repeatChar();
