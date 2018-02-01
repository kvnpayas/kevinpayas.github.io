<?php

require 'connection.php';

$account = $_POST['account']; //user input
$id = $_GET['id'];

$sql = "UPDATE users SET status = '$account'
	WHERE id = '$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: admin_view_customer.php?msg=yes');

?>