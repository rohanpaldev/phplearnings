<?php
// touch("file.txt");
// $handle = fopen("file.txt", "r") ;
// // echo fgets($handle);
// while(!feof($handle)){
//     $data = fgets($handle);
//     echo $data ."<br>";
// }

// echo fwrite($handle, "it has text and my name is rohan, this is updated one ");
// fclose($handle);



// ===================================================================

// file getc

$handle = fopen("file.txt", "r"); 
 while ($char = fgetc($handle))  {

     echo $char;
 }


?>