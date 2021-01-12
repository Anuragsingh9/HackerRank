<?php
class Count{

    public function countHike(){
        $steps = ['U','D','D','D','U','D','U','U'];
//        $steps = ['U','U','D','D','D'];
        $i = 0;
        foreach ($steps as $step){
            if ($step == 'U'){
                    $i++;
            }elseif ($step == 'D'){
                $i--;
            }
        }
        if ($i == 0){
            echo "1";
        }else{
            echo $i;
        }
    }
}
$obj = new Count;
$resutl = $obj->countHike();