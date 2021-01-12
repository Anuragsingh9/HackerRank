<?php
class CharFound{

    public function checkCharacter(){
        $firstString = "hello";
        $secondString = "world";
        $first = str_split($firstString);
        foreach ($first as $firsts) {
            if (strpos($secondString, $firsts) !== false) {
                $found =  "Word Found!";
            } else {
                $notFound = "Word not found!";
            }
        }
        if(isset($found)){
            echo $found;
        }else{
            echo $notFound;
        }
    }
}
$obj = new CharFound;
$result = $obj->checkCharacter();