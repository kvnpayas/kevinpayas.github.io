
<?php function display_content(){
	require 'connection.php';
	?>

	<div class="row center viewWearCont grey lighten-4">
		<div class="col l12 m12 s12">
			<h5 class="z-depth-3 green lighten-1 white-text">Phone Cart</h5>
			</div>
		<?php 
		if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $index){
			foreach ($index as $id => $cat) {
			$sql1 = "SELECT * FROM product_image WHERE product_id = '$id' AND category_id = '$cat' AND icon_image = 1";
			$result1 = mysqli_query($conn,$sql1);
			$row = mysqli_fetch_assoc($result1);
				?>

				<p><div class="col l4 m12 s12" ><img src="<?php echo $row['image'] ?>" class="responsive-img imgView">
					<p><?php print_r($_SESSION['cart']); ?></p>
					<a href="remove_to_cart.php?index=<?php echo $row['id'] ?>" class="btn red white-text"><i class="large material-icons left white-text">delete</i>Delete</a>
				</div></p>

				<?php } }
			// print_r($_SESSION['cart']);
		} ?>
	</div>
	<?php }
	require "template.php";
	?>