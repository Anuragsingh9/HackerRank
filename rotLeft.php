<?php

class Rotate{

    function arr_rotate_left(&$array,$rotate_count) {
        for ($i = 0; $i < $rotate_count; $i++) {
            array_push($array, array_shift($array));

        }
    }

    public function showRotatedArray($results){
        foreach ($results as $result){
            echo $result."\n";
        }
    }

}
$obj = new Rotate;
$xarr = [1,2,3,4,5,6,7,8];
$result = $obj->arr_rotate_left($xarr, 2);
$data = $obj->showRotatedArray($xarr);

