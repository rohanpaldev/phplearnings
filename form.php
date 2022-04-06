<?php  

$username = "";
$password = "";
if (isset($_POST['submit'])){
$username = $GET["username"];
$password =  $GET["password"];
//     echo "your name is ".$username ."<br>";
//     echo "your password is ".$password;
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
<body>
<div class="container">
    <div class="row">
        <div class="col-5 mx-auto mt-3">
            <form action=" <?php echo $_SERVER['PHP_SELF']?>" method="GET">
                <caption>
                    <h2 class="text-center">Login form</h2>
                </caption>
                <div class="form-group">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="passsword" name="password" required>
                </div>
                <button class="btn btn-primary  mt-3" name="submit" >Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row mt-5">
            <h3 class="text-center">User Data</h3>
        <div class="col-4 mx-auto">
            <table class="table table-dark mt-5">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $password; ?></td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div> -->



    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>