<?php
class CloudJumping{

    public function cloudStepToWin($noOfClouds,$clouds){

        $index = 0;
        $winSteps = 0;

        while($index < $noOfClouds - 1){
            if (isset($clouds[$index + 1],$clouds[$index + 2]) && ($clouds[$index + 1] == 0 &&
                    $clouds[$index +2] == 0 || $clouds[$index +1 ] == 1)){
                $index += 2;
                $winSteps++;
                continue;
            }
            $index++;
            $winSteps++;
        }
        echo "A" . $winSteps;
    }
}
$obj = new CloudJumping;
$noOfClouds = 12;
$clouds = ['0','0','1','0','0 ','1 ','0','0','0','0','1','0'];
$result = $obj->cloudStepToWin($noOfClouds,$clouds);