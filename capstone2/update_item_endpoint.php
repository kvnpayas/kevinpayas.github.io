<?php 

require 'connection.php';

	$id = $_GET['index'];
	$cat = $_GET['category'];

if ($cat == 1) {
	$phonename = $_POST['phone_name'];
	$description = $_POST['description'];
	$operating_system = $_POST['operating_system'];
	$display = $_POST['display'];
	$memory_storage = $_POST['memory_storage'];
	$dimension_weight = $_POST['dimension_weight'];
	$rear_camera = $_POST['rear_camera'];
	$front_camera = $_POST['front_camera'];
	$processor = $_POST['processor'];
	$media = $_POST['media'];
	$battery = $_POST['battery'];
	$wireless_location = $_POST['wireless_location'];
	$sensor = $_POST['sensor'];
	$port = $_POST['port'];
	$material = $_POST['material'];
	$network = $_POST['network'];

	$sql = "UPDATE phone_tablet SET name = '$phonename',
	description = '$description',
	operating_system = '$operating_system',
	display = '$display',
	memory_storage = '$memory_storage',
	dimension_weight = '$dimension_weight',
	rear_camera = '$rear_camera',
	front_camera = '$front_camera',
	processor = '$processor',
	media= '$media',
	battery = '$battery',
	wireless_location = '$wireless_location',
	sensor = '$sensor',
	port = '$port',
	material = '$material',
	network = '$network'
	WHERE id = '$id'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	header('location: admin_item_page.php#test2');
} else if($cat == 2){

}else if($cat == 3){
	$wearname = $_POST['watch_name'];
	$description = $_POST['watch_description'];
	$price = $_POST['watch_price'];

	$sql = "UPDATE wears SET name = '$wearname',
	description = '$description',
	price = '$price'
	WHERE id = '$id'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	header('location: admin_item_page.php#test2');
}


?>