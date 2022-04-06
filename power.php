<?php
if (isset($_POST['submit'])){
    $base = $_POST['base'];
    $power= $_POST['power'];
    $powerNumber = pow($base, $power);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Power of any number</title>
</head>
<body>
    <div class="conatainer">
        <div class="row">
            <div class="col-5 mx-auto mt-5">
                <form action="" method="POST">
                    <caption>
                        <h3 class="text-center">Power of any number</h3>
                    </caption>
                    <div class="form-group">
                        <label for="base"> Base Number </label>
                        <input type="text" name="base" id="base" placeholder="type base number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="power"> Power </label>
                        <input type="text" name="power" id="power" placeholder="type power number" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </div>
                    <?php 
                    echo  "Result of ".$base ." X ". " $power"." = ". " ". $powerNumber;
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php echo '"Hello world "'?>
<?php 

$a =  10;
$e = strval($a);
$b = true;

$c = $e+$b;
echo $c."<br>";
print_r($c);
echo gettype($c);



$tr = array(
    "rohan"=>"is learning php",
    "karan"=>"is a model",
    "raj"=>"is a driver",
    "tarun"=> "carpenter",
    "vaibhav"=>"is a pilot",

);

print_r($tr);




?>