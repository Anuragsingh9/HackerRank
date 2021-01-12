<?php

class Searchnumber{

    public function searchPhoneNumber(){
        $contact = ['Anurag' => 8210740738, 'Ravi' => 8507042799, 'Mami' => 7399356957];
        $contacts = ['Anurag', 'Madhu' , 'Mami'];
        $keys = array_keys($contacts);
        $count = count($keys);

        for ($i = 0; $i < $count; $i++){
            if(array_key_exists($contacts[$i],$contact)){
                echo $contacts[$i]."=". $contact[$contacts[$i]]."<br>";
//                $contact[$i];
            }else{
                echo "Not found"."<br>";
            }
        }
//       echo  $contact['Anurag'];

//        foreach($keys as $key => $value){
//            if (array_key_exists($key,$contact)){
//                echo $key .'='. $value."<br>";
//            }else{
//                echo "Not found"."<br>";
//            }
//        }
//        $check = array_key_exists('Anurag',$contact);











    }
}
$obj = new Searchnumber;
$result = $obj->searchPhoneNumber();