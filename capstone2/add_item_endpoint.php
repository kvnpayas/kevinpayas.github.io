<?php 

require 'connection.php';

$id = $_GET['id'];

if ($id == 1) {
	$category_id = 1;
	$target_dir1 = "assets/img/phone/";
	$target_file1 = $target_dir1 . basename($_FILES["front_image"]["name"]);
	move_uploaded_file($_FILES["front_image"]["tmp_name"], $target_file1);

	$target_dir2 = "assets/img/phone/";
	$target_file2 = $target_dir2 . basename($_FILES["product_image1"]["name"]);
	move_uploaded_file($_FILES["product_image1"]["tmp_name"], $target_file2);
	$target_dir3 = "assets/img/phone/";
	$target_file3 = $target_dir3 . basename($_FILES["product_image2"]["name"]);
	move_uploaded_file($_FILES["product_image2"]["tmp_name"], $target_file3);

	$target_dir4 = "assets/img/phone/";
	$target_file4 = $target_dir4 . basename($_FILES["product_image3"]["name"]);
	move_uploaded_file($_FILES["product_image3"]["tmp_name"], $target_file4);


	
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

	$sql = "INSERT INTO phone_tablet (name,description,operating_system,display,memory_storage,dimension_weight,rear_camera,front_camera,processor,media,battery,wireless_location,sensor,port,material,network,category_id)
	VALUES ('$phonename','$description','$operating_system','$display','$memory_storage','$dimension_weight','$rear_camera','$front_camera','$processor','$media','$battery','$wireless_location','$sensor','$port','$material','$network',$category_id)";

	if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	


	if(basename($_FILES["front_image"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file1',$category_id,$last_id,1)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));	
	}
	if(basename($_FILES["product_image1"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file2',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	if(basename($_FILES["product_image2"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file3',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	if(basename($_FILES["product_image3"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file4',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	// for ($i=0; $i < 4 $i++) { 
	// 	$x = 1;

	// }
	} else{
		die(mysqli_error($conn));
	}
} else if($id == 2){
	$category_id = 2;
	$target_dir1 = "assets/img/tablet/";
	$target_file1 = $target_dir1 . basename($_FILES["front_image"]["name"]);
	move_uploaded_file($_FILES["front_image"]["tmp_name"], $target_file1);

	$target_dir2 = "assets/img/tablet/";
	$target_file2 = $target_dir2 . basename($_FILES["product_image1"]["name"]);
	move_uploaded_file($_FILES["product_image1"]["tmp_name"], $target_file2);
	$target_dir3 = "assets/img/tablet/";
	$target_file3 = $target_dir3 . basename($_FILES["product_image2"]["name"]);
	move_uploaded_file($_FILES["product_image2"]["tmp_name"], $target_file3);

	$target_dir4 = "assets/img/tablet/";
	$target_file4 = $target_dir4 . basename($_FILES["product_image3"]["name"]);
	move_uploaded_file($_FILES["product_image3"]["tmp_name"], $target_file4);


	
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

	$sql = "INSERT INTO phone_tablet (name,description,operating_system,display,memory_storage,dimension_weight,rear_camera,front_camera,processor,media,battery,wireless_location,sensor,port,material,network,category_id)
	VALUES ('$phonename','$description','$operating_system','$display','$memory_storage','$dimension_weight','$rear_camera','$front_camera','$processor','$media','$battery','$wireless_location','$sensor','$port','$material','$network',$category_id)";

	if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	


	if(basename($_FILES["front_image"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file1',$category_id,$last_id,1)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));	
	}
	if(basename($_FILES["product_image1"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file2',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	if(basename($_FILES["product_image2"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file3',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	if(basename($_FILES["product_image3"]["name"]) == ""){
		
	}else{
		$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
		VALUES ('$target_file4',$category_id,$last_id,0)";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
	}
	// for ($i=0; $i < 4 $i++) { 
	// 	$x = 1;

	// }
	} else{
		die(mysqli_error($conn));
	}
} else if($id == 3){
	$category_id = 3;
	$target_dir1 = "assets/img/wear/";
	$target_file1 = $target_dir1 . basename($_FILES["product_image_watch"]["name"]);
	move_uploaded_file($_FILES["product_image_watch"]["tmp_name"], $target_file1);


	
	$watchname = $_POST['watch_name'];
	$description = $_POST['description_watch'];
	$watch_price = $_POST['watch_price'];

	$sql = "INSERT INTO wears (name,description,price,category_id)
	VALUES ('$watchname','$description','$watch_price',$category_id)";

	if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	


		if(basename($_FILES["product_image_watch"]["name"]) == ""){
			
		}else{
			$sql = "INSERT INTO product_image (image,category_id,product_id,icon_image)
			VALUES ('$target_file1',$category_id,$last_id,1)";
			mysqli_query($conn,$sql) or die(mysqli_error($conn));	
		// for ($i=0; $i < 4 $i++) { 
		// 	$x = 1;

		// }
		}
	}
	header('location: wear.php');
}


?>