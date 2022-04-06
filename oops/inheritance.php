<?php

class class1 {

    function   __cunstruct(){
        echo "this is my first data in class1";
    }
    function num2(){
        echo "function 2";
    }
}

class class2 extends class1{

}

$obj = new class2();
// $obj ->num2();
// $obj-> __cunstruct();
?>
