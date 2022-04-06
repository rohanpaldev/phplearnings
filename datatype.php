<!-- data types -->

<!-- string
integer
float
array
object -->

<?php 
// php string data type
$data = "Hello World";

//ways to printing the $data variable value on display
var_dump ($data);
// you can use html tags in php
echo "<br>"; 
echo $data;

// int data type
$a = 12;
$b= -12;
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);//Decimal number

//float data type 
$c = 20.5;
echo "<br>";
var_dump($c);

//array data type


$data = array("rohan","is", "learning","php");
echo "<br>";
echo "<pre>";
// print_r($data);
echo "my first array data is". " " .$data[0] ;
echo "\n"; //for new line 
echo "my Second array data is". " " .$data[1] ;
echo "\n";
echo "my third array data is". " " .$data[2] ;
echo "\n";
echo "my four array data is". " " .$data[0] ;

echo "\n";
$bool  = 10;
if($bool == 10){
    echo "true";
}else{
    echo "false";
}
 
echo "\n";
if ( $bool != 5 ){
    echo "false";

}else{
    echo "true";
}


//string functions 
echo "\n";
echo strlen("my name is rohan"); //finding lenght of a string
echo "\n";
echo strrev("reverse the string"); //reverse the string
echo "\n";

//trim function
echo trim("I am learning php", "Ip");
//  trim help us to remove white space and can remove string from both side


$explode = "He is a boy";
print_r(explode(" ", $explode)); //explode converts a string to an array

$changecase = "DATA CASE WILL BE CHANGE";
$changecase1 = "data case will be change";
$wordcount  = "count the words in stroed in a variable";
echo strtoupper($changecase1), "\n";
echo strtolower($changecase), "\n"; 
echo str_word_count($wordcount);





?>