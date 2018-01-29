<?php

require 'connection.php';
session_start();

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username1'];
$email = $_POST['reg_email'];
$address = $_POST['address'];
$password = sha1($_POST['reg_password']);

$sql = "INSERT INTO users (first_name, last_name, user_name, email_address, password, address, role) VALUES ('$firstname','$lastname','$username','$email','$password','$address','regular')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: index.php');

// $string = file_get_contents("assets/users.json");
// $users = json_decode($string, true);
// echo "original users array: "; print_r($users);

// $users[$username] = $password;
// echo "<br> new users array: "; print_r($users);

// $file = fopen("assets/users.json","w"); //open the json file
// fwrite($file, json_encode($users, JSON_PRETTY_PRINT)); //rewrite the json file
// fclose($file); //close the json file

?>