<?php 
	require 'connection.php';
	$cat = $_REQUEST['category'];


	if ($cat == 'select') {
		
		echo "<div class='col l12 s12 m12 center'>
			<h2>SELECT A CATEGORY</h2>
		</div>
		";
	
	} else if($cat == 1){
		$sql = "SELECT * FROM phone_tablet WHERE category_id = '$cat'";
		$result = mysqli_query($conn,$sql);
		while($item = mysqli_fetch_assoc($result)) {
		?>
		<div class="col l4 m6 s12 itemCol wearCont center hoverable">
			<?php 
			$id = $item['id'];
			$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND icon_image = 1 AND category_id = 1"; 

			$result1 = mysqli_query($conn,$sql1);
			while($image = mysqli_fetch_assoc($result1)) {
			?>
			<a href="editproduct.php?index=<?php echo $id ?>"><img src="<?php echo $image['image'] ?>" class="responsive-img imgView">

			<?php } ?>
			<p class="green-text"><?php echo $item['name'] ?></p></a>
		</div>
<?php }
	} else if ($cat == 2) {
			echo "<h1>Tablet</h2>";
	}else if ($cat == 3) {
		$sql = "SELECT * FROM wears WHERE category_id = '$cat'";
		$result = mysqli_query($conn,$sql);
		while($item = mysqli_fetch_assoc($result)) {
		?>
		<div class="col l4 m6 s12 itemCol wearCont center hoverable">
			<?php 
			$id = $item['id'];
			$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND icon_image = 1 AND category_id = 3"; 

			$result1 = mysqli_query($conn,$sql1);
			while($image = mysqli_fetch_assoc($result1)) {
			?>
			<a href="editproduct_wear.php?index=<?php echo $id ?>"><img src="<?php echo $image['image'] ?>" class="responsive-img wearImg">

			<?php } ?>
			<p class="green-text"><?php echo $item['name'] ?></p></a>
		</div>
<?php }
	}
?>