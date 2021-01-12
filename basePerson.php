<?php

class Person{

    public function calculateAverage($name,$number,$marks){
        $total =0;
        $details = ['Anurag','Ravi','mami'];
        $check = in_array($name,$details);
        if($check){
           foreach ($marks as $mark){
               (int)$total += $mark;
           }
             $average = $total / $number;
            return (int) $average;
        }else{
            echo  "Student not found";
        }
    }
}

class Student extends Person {

    public function getAverage($name,$number,$marks){
            $average = $this->calculateAverage($name,$number,$marks);
            if(isset($average)){
                 $this->selectGrade($average);
            }
    }

    public function selectGrade($average){
            if($average >= 90 && $average <= 100){
                echo "Grade : "."O";
            }elseif($average >= 80 && $average < 90){
                echo "Grade : "."E";
            }elseif($average >= 70 && $average < 80){
                echo "Grade : "."A";
            }elseif($average >= 60 && $average < 70){
                echo "Grade : "."P";
            }elseif($average >= 50 && $average < 60){
                echo "Grade : "."D";
            }elseif( $average <= 50){
                echo "Grade : "."T";
            }
    }
}
$obj = new Student;
$number = 3;
$name = 'Anurag';
$marks = [86,90,88];
$result = $obj->getAverage($name,$number,$marks);