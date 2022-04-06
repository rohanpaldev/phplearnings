<?php 


if(isset($_POST["name"]))
{
	sleep(5);
    $conn = mysqli_connect("localhost", "root", "", "users");

	$success = '';

	$first_name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

	$name_error = '';
	$lastan_error = '';
	$email_error = '';
	$address_error = '';
	

	if(empty($first_name))
	{
		$name_error = 'Name is Required';
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$name_error = 'Only Letters and White Space Allowed';
		}
	}
    if(empty($last_name))
	{
		$lname_error = 'Name is Required';
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $last_name))
		{
			$lname_error = 'Only Letters and White Space Allowed';
		}
	}
     

	if(empty($email))
	{
		$email_error = 'Email is Required';
	}
	else
	{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email_error = 'eMail is invalid';
		}
	}

	

	if(empty($address))
	{
		$address_error = 'Address is Required Field';
	}

	

	if($name_error == '' && $lname_error == '' && $email == '' && $address_error == '' )
	{
		//put insert data code here 

		$data = array(
			':name'			=>	$first_name,
            ':last_name'    =>  $last_name,
			':email'		=>	$email,
			':address'		=>	$address,
			
		);

        $query = "INSERT INTO `user_data`( `first_name`, `last_name`, `email`, `address`) VALUES ('$first_name', '$last_name', '$email', '$address')";
        $result = mysqli_query($conn, $query);
		$statement = $connect->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Data Saved</div>';
	}

	$output = array(
		'success'		=>	$success,
		'name_error'	=>	$name_error,
        'email_error'   =>  $email_error,
		'lname_error'	=>	$email_error,
        'address_error' =>  $address_error
		
	);

	echo json_encode($output);
	
}
?>
