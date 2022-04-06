<?php

$first_name = "";
$last_name = "";
$email = "";
$address = "";


// define variables and set to empty values
$nameErr = "";
$lerror = "";
$emailErr = "";
$adderror = "";


include('db.php');
if (isset($_POST['submit'])){

    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $query = "INSERT INTO `user_data`( `first_name`, `last_name`, `email`, `address`) VALUES ('$first_name', '$last_name', '$email', '$address')";
    
  
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) && empty($_POST['last_name'])) {
            $nameErr = "Name is required";
            $lerror = "last name is Required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        
        
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        
        if (empty($_POST["address"])) {
            $adderror = "Address can not be empty";
        } 
        else 
        {
            
            $result = mysqli_query($conn, $query);
                
                if ($result == true) {
                    echo "true";
                } else {
                    echo "false";
                }
        }
        
    }
    
}
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .error {color: #FF0000;}
</style>

<body>
    <div class="conrainer-fluid">
        <div class="row">
            <div class="col-5 mx-auto">
                <h2 class="text-center mt-4">Registration form</h2>
               
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        First name: <input class="form-control" type="text" name="name" value="<?php echo $first_name; ?>" >
                        <span class="error">* <?php echo $nameErr; ?></span>
                    </div>
                    <div class="form-group">
                        last Name <input class="form-control" type="text" name="last_name" value="<?php echo $last_name; ?>">
                        <span class="error">* <?php echo $lerror; ?></span>
                    </div>
                    <div class="form-group">
                       Email: <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                        <span class="error"><?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-group">
                    Address: <textarea class="form-control" name="address" rows="5" cols="40"><?php echo $address; ?></textarea>
                    <span class="error">* <?php echo $adderror; ?></span>
                    </div>
                    <div class="form-group mt-3 ">
                        <input class="btn btn-primary w-100" type="submit" name="submit" value="Submit">

                    </div>
                </form>

            </div>
            <div class="col-5 mt-5">
                <caption>
                    <h2 class="text-center">
                        Users data
                    </h2>
                </caption>
                <table class="table table-light mt-3">
                    <thead class="bg-dark">
                        <tr>
                            <th>S.no</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('db.php');
                            $query = "SELECT * FROM `user_data`";
                            $result = mysqli_query($conn, $query);
                            $x = 1;
                            while ($res = mysqli_fetch_array($result)) {

                            ?>
                            <tr>
                            <td><?php echo $x; ?></td>
                                <td><?php echo $res['first_name']; ?></td>
                                <td><?php echo $res['last_name']; ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['address']; ?></td>
                                <td><a class="btn btn-danger" name="" href="delete.php?id=<?php echo $res['S_no'] ?>">Delete</a></td>
                            </tr>
                    </tbody>
                    <?php $x++;
                        } ?>
                </table>
            </div>
        </div>
    </div>


   

</body>

</html>