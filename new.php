<?php
//Access the Database
include('db.php');

//Submit and data insert request
if (isset($_POST['submit'])) {
    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $query = "INSERT INTO `user_data`( `first_name`, `last_name`, `email`, `address`) VALUES ('$first_name', '$last_name', '$email', '$address')";

$name_error = $lerror = $email_err = $add_err = "";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['name']) && empty($_POST['last_name']) && empty($_POST['email']) && empty($_POST['address'])) {
            $name_error = "<span style='color:red;'>(*Please fill your name)</span>";
            $lerror = "<span style='color:red;'>(*Please fill your last name)</span>";
            $email_err = "<span style='color:red;'>(*Please fill your Email Address)</span>";
            $add_err ="<span style='color:red;'>(*Please fill your Email Address)</span>";
        }
        else{
            if (empty($_POST['name'])) {
                $name_error = "<span style='color:red;'>(*Please fill your name)</span>";
            }
            else if(empty($_POST['last_name'])){
            
                $lerror = "<span style='color:red;'>(*Please fill your last name)</span>";
            }
            else if(empty($_POST['email'])){
            
                $email_err = "<span style='color:red;'>(*Please fill your Email Address)</span>";
            }
            else if( empty($_POST['address'])){
            
                $add_err = "<span style='color:red;'>(*Please fill your Address)</span>";
            }
            else {
            
                $result = mysqli_query($conn, $query);
                    
                    if ($result == true) {
                        echo "true";
                    } else {
                        echo "false";
                    }
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
    <title>Form Validation</title>
</head>

<body>
    <!--form-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-1  mt-5">
                <caption>
                    <h2 class="text-center">Registration form</h2>
                </caption>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span>
                            <?php if (isset($first_name)) echo $name_error; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name </label>
                        <input type="text" class="form-control" name="last_name" id="last_name">
                        <span>
                            <?php if (isset($last_name)) echo $lerror; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <span>
                            <?php if (isset($email)) echo $email_err; ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="10" rows="2"></textarea>
                        <span>
                            <?php if (isset($address)) echo $add_err; ?>
                        </span>
                    </div>
                    <button class="btn btn-primary mt-3 mx-auto w-100" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-6 mt-5">
                <caption>
                    <h2 class="text-center">
                        Users data
                    </h2>
                </caption>
                <table class="table table-light mt-3">
                    <thead class="bg-dark">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Delete</th>
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







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>