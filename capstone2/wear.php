
<?php function display_content(){
	require 'connection.php';
	?>

	<div class="row">
		<div class="col l6 m12 s12 wearCont center">
			<h3>Follow your fitness</h3>
			<p>Track walks, runs, rides, and strength training from Google Fit and your favorite apps. Get fitness coaching, measure your heart rate, and even stream music, right from your wrist. Android Wear watches with cellular connectivity let you use your favorite apps, even when you leave your phone behind.</p>
		</div>
		<div class="col l6 m12 s12 wearCont">
			<div class="">
				<div class="card-content">
					<div class="card-content center">
						<p>
						<div id="googleFit">
							<img src="assets/img/google-fit.png">
							<p>Google Fit</p>
						</div>
						<div id="strava">
							<img src="assets/img/bg-strava.png" class="circle">
							<p>Strava</p>
						</div>
						<div id="googlePlay">
							<img src="assets/img/google-play.png">
							<p>Google Play Music</p>
						</div>
						<div id="runKeeper">
							<img src="assets/img/runkeeper.jpg" class="circle">
							<p>Runkeeper</p>
						</div>
						</p>
					</div>
				</div>

				
				<div class="card-tabs">
					<ul class="tabs tabs-fixed-width tabsWear">
						<li class="tab"><a class="active" href="#googleFit">
							<img src="assets/img/google-fit_tabs.png" class="responsive-img iconImg">
						</a></li>
						<li class="tab"><a href="#strava">
							<img src="assets/img/strava.png" class="responsive-img iconImg">
						</a></li>
						<li class="tab"><a href="#googlePlay">
							<img src="assets/img/google-play-icon.png" class="responsive-img iconImg">
						</a></li>
						<li class="tab"><a href="#runKeeper">
							<img src="assets/img/runkeeper.png" class="responsive-img iconImg">
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="row center grey lighten-4">
	<h3 class="center z-depth-3 green lighten-1 white-text">Android Watch Products</h3>

	<?php 
	$sql = "SELECT * FROM wears WHERE category_id = 3";
	$result = mysqli_query($conn,$sql);
	$x=100;
	while($item = mysqli_fetch_assoc($result)) {
	?>
	<p><div class="col l4 m6 s12 itemCol hoverable">
		<?php 
		$id = $item['id'];
		$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND icon_image = 1 AND category_id = 3"; 

		$result1 = mysqli_query($conn,$sql1);
		while($image = mysqli_fetch_assoc($result1)) {
		?>
		<a href="wearview.php?index=<?php echo $id ?>"><img src="<?php echo $image['image'] ?>" class="responsive-img wearImg">

		<?php } ?>
		<h5 class="green-text"><?php echo $item['name'] ?></h5></a>
		<span class="green-text">Php: <?php echo $item['price'] ?></span>
		<?php
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
					?>
					
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="editproduct_wear.php?index=<?php echo $item['id'] ?>" class="btn blue white-text"><i class="large material-icons left white-text">edit</i>Edit</a>
						<a href="#" class="btn red white-text"><i class="large material-icons left white-text">delete</i>Delete</a>
					</div>
			<?php		
				} else {
			?>	
					<div class="col l12 m12 s12 center viewWearCont">
						<a href="add_to_cart.php?index=<?php echo $item['id'] ?>&&cat=<?php echo $item['category_id'] ?>&&id=<?php echo $x ?>" class="btn green white-text"><i class="large material-icons left white-text">add_shopping_cart</i>GET YOURS</a>
					</div>
			<?php } ?>
	</div></p>
	<?php $x++; ?>
	<?php  } ?>
</div>
	</div>


	<?php } 
	require "template.php";
	?>