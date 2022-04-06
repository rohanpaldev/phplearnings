<?php 

//get method
// $username = "";
// $pass = "";
// if (isset($_POST['submit'])){
//     $username = $_GET['username'];
//     $pass = $_GET['password'];
// }


//post method
// if (isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $pass = $_POST['password'];
//     echo "your username is ".$username ."\n";
//     echo "your password is ".$pass ;
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" > <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" > <br> <br>
        <button class="submit" name="submit" type="submit" >submit</button>
    </form>
</body>
</html>