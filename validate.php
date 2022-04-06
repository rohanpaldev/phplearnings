<?php
include('db.php');

//Submit and data insert request
if (isset($_POST['submit'])) {
    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $query = "INSERT INTO `user_data`( `first_name`, `last_name`, `email`, `address`) VALUES ('$first_name', '$last_name', '$email', '$address')";
} else {
    $result = mysqli_query($conn, $query);
    if ($result == true) {
        echo "true";
    } else {
        echo "false";
    }
}



//Defining the empty variables
$name_error = $lerror = $email_err = $add_err = "";
$first_name = $last_name = $email = $address = "";

if ($_SERVER['REQUEST_METHOD'] = "POST") {
    if (empty($_POST['name'])) {
        $name_error = "<span style='color:red;'>(*Please fill your name)</span>";
    } else {
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $name_error = "<span style='color:red;'>(*only type text)</span>";
        }
    }
}
if (empty($_POST['last_name'])) {
    $lerror = "<span style='color:red;'>(*Please fill your last name)</span>";
} else {
    $name = test_input($_POST['last_name']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $name_error = "<span style='color:red;'>(*only type text)</span>";
    }
}

if (empty($_POST['email'])) {
    $email_err = "<span style='color:red;'>(*Please fill your Email Address)</span>";
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
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
