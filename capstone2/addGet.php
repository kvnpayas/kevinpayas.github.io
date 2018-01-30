<?php 
require 'connection.php';
$users = $_POST['users'];
$sql1 = "SELECT address FROM users WHERE user_name = '$users'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);

echo $row['address'];

?>