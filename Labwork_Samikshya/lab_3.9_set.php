<?php
$cookie_name = "user";
$cookie_value = "Samikshya";
$cookie_expiration = time() + (86400 * 30); // 30 days from now
setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
header("Location: lab_3.9_get.php");
exit();
