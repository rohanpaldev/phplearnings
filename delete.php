<?php 
include('db.php');   
        $del = $_GET['id'];
        $query="DELETE FROM `user_data` WHERE S_no = $del;";
        $result=mysqli_query($conn, $query);
        header('location: formval.php');




// include('formval.php');
// extract($_POST);
// extract($_GET);
?>