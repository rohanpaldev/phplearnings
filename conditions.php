<!-- if 
if else
if elseif else
switch -->

<?php
// if condition 
$a = 2;

if ($a == 2 ){
    // echo "true";
}


// if else
if ($a ==5 or  $a > 1){
    echo "true","\n";

}
else{
    echo "false", "\n";
}


// if elseif 

$data = "monday";

if ($data == "monday"){
    echo "today is monday";

}
elseif($data == "sunday"){
    echo " today is sunday";

}
else{
    echo "not a valid day";
}

// switch statement


$n = "June";
echo "<br>";
switch($n) {
	case "January":
		echo "Its January";
		break;
	case "February":
		echo "Its February";
		break;
	case "March":
		echo "Its March";
		break;
	case "April":
		echo "Its April";
		break;
	case "May":
		echo "Its May";
		break;
	case "June":
		echo "Its June";
		break;
	case "July":
		echo "Its July";
		break;
	case "August":
		echo "Its August";
		break;
	case "September":
		echo "Its September";
		break;
	case "October":
		echo "Its October";
		break;
	case "November":
		echo "Its November";
		break;
	case "December":
		echo "Its December";
		break;
	default:
		echo "Doesn't exist";
}



?>
