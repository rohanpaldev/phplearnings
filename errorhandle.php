<?php 

// $file = fopen("fetch.txt", "r");
// if (!file_exists("fetch.txt")){
//     die('file not exist');
// }
// else{
//     $file = fopen("fetch.txt", "r");
// }



// Indexed array
$rohan = array("Rohan", "Ritik", "Dheeraj", "varun");
echo "<pre/>";
print_r($rohan);
echo $rohan[2];
echo  "<br>" .$rohan[3];
print_r($rohan);


//Associative array
$data = array("Rohan" => "is learning PHP", "karan"=>"is a model", "raj"=>"is a driver");
print_r($data);


// 2d array 
function change_case($data){
    return (array_change_key_case($data, CASE_UPPER));
}
$data = array("Rohan" => "is learning PHP", "karan"=>"is a model", "raj"=>"is a driver");
 print_r(change_case($data));


$data = array(
    array("rohan", "is", "learnning","php"),
    array("karan", "is", "a ", "model"),
    array("raj", "is", "a", "driver")
);
echo "<pre/>";
// print_r (change_case($data));


// array chunk

$data = array(
    "Rohan" => "is learning PHP",
    "karan"=>"is a model",
    "raj"=>"is a driver", 
    "tarun"=> "carpenter",
    "vaibhav"=>"is a pilot",
 );

    $chunk_array = array_chunk($data, 2, true);

    echo "<pre/>";
    print_r($chunk_array);



    //array column
    $student_data = array(
       array(

        "roll"=> "1",
        "subject"=>"science",
        "name" => "tarun"
       ),
       array(
           "roll"=>"2",
           "subject"=>"computer",
           "name"=> " Rishabh"
       ),
       array(
           "roll"=>"3",
           "subject"=>"maths",
           "name"=>"karan"
       )
       );
    $fetch = array_column($student_data, "name", "roll");
    echo "<pre/>";
    print_r($fetch);

    //array_combine
    $data1 = array("rohan is", "karan is", "raj is");
    $data2 = array("learning php", "a model", "driver");


    function combine($data1, $data2){
        return(array_combine($data1, $data2));
    }

    echo "<pre/>";
    print_r(combine($data1, $data2));



//counting values in an arrat


$cars = array("audi","audi", "BMW", "BMW", "nano", "maruti");

function counting($cars){
    return(array_count_values($cars));
}
echo "<pre/>";
print_r(counting($cars));



//differance fucntion
$cars = array("a","b ", "c", "d", "e", "f");
$cars1 = array("a","b", "g", "c", "d", "e");
$cars2 = array("a","b", "c", "k", "l", "e");


function diffrance($cars, $cars1, $cars2){
    return(array_diff($cars, $cars1, $cars2));
}

echo "<pre/>";
// print_r(diffrance($cars, $cars1, $cars2));



//diffrence function with associative array


$rohan1 = array("10"=>"RAM", "20"=>"LAXMAN", "30"=>"RAVI","40"=>"KISHAN", "50"=>"RISHI");
$rohan2 = array("10"=>"RAM", "70"=>"LAXMAN", "30"=>"KISHAN", "80"=>"RAGHAV");
$rohan3 = array("20"=>"LAXMAN", "80"=>"RAGHAV");


$diff = array_diff_assoc($rohan1, $rohan2, $rohan3);
echo "<pre/>";
print_r($diff);


//array fill fuction 
$start = 1;
$end = 10;
$data = "dheeraj";


// $fill = array_fill($start, $end, $value);
// echo "<pre/>";
// print_r($fill);
function fill_data($start, $end, $data){
    return (array_fill($start, $end, $data));
}

echo "<pre/>";
print_r (fill_data($start, $end, $data));

//array fill fucntion keys

$keyFill = array( "rohan", 25, 20.2, true, "pal");
$fillMode = array_fill_keys($keyFill, 'Program');
echo "<pre/>";
print_r($fillMode);
?>


<?php

//  $a  = "10";
//  $b = true;
//  $c = $a + $b;
//  Echo $c;



 $a = 5;
 $b = 5;
 echo ($a === $b);
?>