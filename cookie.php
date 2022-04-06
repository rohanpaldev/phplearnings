<?php 

$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (10), "/");

if(!isset($_COOKIE['user'])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
header("refresh: 10");
?>


<?php 

$str = "rohan";

echo "<pre/>";
echo base64_encode($str);
echo "<br>";
echo utf8_decode($str);

?>