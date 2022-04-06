<!-- for loop 
while loop
do while loop
for each loop -->

<?php
// for loop

// for (initilization number, test condition, update expresstion);

$i = 1;


for ($i=1; $i <= 20;  $i+=3){
    echo "<pre>";
    echo $i;
}

echo "<br>";
// while ( if the condition us true){
    // code will be executed
// }

$num = 1;
while ($num < 12){
    $num ++;
    echo $num;
}


//do while loop

$data = 2;

do{
    $data++;
    echo "<br>";
    echo $data;
}
while($data < 10);

//for each loop 


$data = array (10, 20, 30, 40, 50, 60);
foreach ($data as $val) { 
    echo "$val \n";
}
  
$data = array ("Ram", "Laxman", "Sita");
foreach ($data as $val) { 
    echo "$val \n";
}
?>
