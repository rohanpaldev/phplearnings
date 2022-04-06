<?php 
function error_handle ($data ,$data1, $data2, $data3, $res, $db, $ques){
    global $data , $data1, $data2, $data3;
    $data = "";
    if (empty($_POST['name']) && empty($_POST['last_name']) && empty($_POST['email']) && empty($_POST['address'])) {
        $data = "<span style='color:red;'>(*Please fill your name)</span>";
        $data1 = "<span style='color:red;'>(*Please fill your last name)</span>";
        $data2 = "<span style='color:red;'>(*Please fill your Email Address)</span>";
        $data3 ="<span style='color:red;'>(*Please fill your Email Address)</span>";
    }
    else{
        if (empty($_POST['name'])) {
            $data = "<span style='color:red;'>(*Please fill your name)</span>";
           
        }
        else if(empty($_POST['last_name'])){
        
            $data1 = "<span style='color:red;'>(*Please fill your last name)</span>";
        }
        else if(empty($_POST['email'])){
        
            $data2 = "<span style='color:red;'>(*Please fill your Email Address)</span>";
        }
        else if( empty($_POST['address'])){
        
            $data3 = "<span style='color:red;'>(*Please fill your Address)</span>";

        }
        else {
            $res = mysqli_query($db, $ques);
                if ($res == true) {
                    echo"data has been saved";
                } else {
                    echo "false";
                }
        }
        
    }
}


?>