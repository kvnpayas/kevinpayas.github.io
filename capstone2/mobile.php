<?php function title(){
	echo "Mobile Page";
}
?>
<?php function display_content(){
	require 'connection.php';
 ?>

<div class="video-container">
	<video src="assets/video/Android-Scroll.mp4" class="responsive-video " id="videoback" autoplay loop playsinline>
	</video>
		<div class="row" id="rowPhone">
			<div class="col l12 m12 s12">
				<h2 class="header center-align green-text text-ligthen-1">Be together.</h2>
				<h2 class="header center-align green-text text-ligthen-1">Not the same.</h2>
				<h5 class=" white-text center-align">Whether you’re looking for a waterproof phone, the longest battery life or a low-light camera, there’s an Android phone for you.</h5>
			</div>
		</div>
</div>

<div class="row center grey lighten-4" id="containerID">
	<h3 class="center z-depth-3 green lighten-1 white-text">Mobile Products</h3>
	<form id="check-form">

	<?php 
	$sql = "SELECT * FROM phone_tablet WHERE category_id = 1";
	$result = mysqli_query($conn,$sql);
	$check=1;
	$id=1;
	while($item = mysqli_fetch_assoc($result)) {
	?>
	<p><div class="col l4 m6 s12 itemCol hoverable">
		<?php 
		$id = $item['id'];
		$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND icon_image = 1 AND category_id = 1"; 

		$result1 = mysqli_query($conn,$sql1);
		while($image = mysqli_fetch_assoc($result1)) {
		?>
		<a href="mobileview.php?index=<?php echo $item['id'] ?>&&cat=<?php echo $item['category_id'] ?>&&id=<?php echo $id ?>"><img src="<?php echo $image['image'] ?>" class="responsive-img imgView">

		<?php } ?>
		<?php
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
					?>
					
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="editproduct.php?index=<?php echo $item['id'] ?>" class="btn blue white-text"><i class="large material-icons left white-text">edit</i>Edit</a>
						<a href="delete_page.php?index=<?php echo $item['id'] ?>&&cat=<?php echo $item['category_id']; ?>" class="btn red white-text">Delete</a>
					</div>
			<?php		
				} else {
			?>	
					<div class="col l12 m12 s12 center viewWearCont">
					<a href="add_to_cart.php?index=<?php echo $item['id'] ?>&&cat=<?php echo $item['category_id'] ?>&&id=<?php echo $id ?>" class="btn green white-text"><i class="large material-icons left white-text">add_shopping_cart</i>GET YOURS</a>
					<p>
					<div class="checkTest">
		      				<input type="checkbox" id="check<?php echo $check ?>" class="checkbox" />
		     				<label for="check<?php echo $check ?>">Check to Compare</label>
     				</div>
   					</p>
					</div>
			<?php } ?>
	</div></p>
	<?php $check++;
	$id++; ?>
	<?php } ?>
	</form>
</div>


<?php } 
require "template.php";
?>