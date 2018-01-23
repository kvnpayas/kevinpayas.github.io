<?php

$username = $_POST['username1'];
$password = $_POST['password'];

$string = file_get_contents('user.json');
$users  = json_decode($string, true);
echo "original users array"; print_r($users);

$users[$username] = $password;
echo "<br> new users array"; print_r($users);

$file = fopen("user.json","w");
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
fclose($file);

?>