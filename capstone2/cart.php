
<?php function display_content(){
	require 'connection.php';
	?>

	<div class="row center viewWearCont grey lighten-4">
		<div class="col l12 m12 s12">
			<h5 class="z-depth-3 green lighten-1 white-text">Cart</h5>
			</div>
		<?php 
		if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $x => $index){
			foreach ($index as $id => $cat) {
				// $sql1 = "SELECT phone_tablet.name,phone_tablet.price,product_image.image FROM phone_tablet JOIN product_image ON(product_image.product_id = phone_tablet.id) WHERE product_image.product_id = '$id' AND product_image.category_id = '$cat' AND product_image.icon_image = 1
				// 	UNION ALL
				// 	SELECT wears.name,wears.price,product_image.image FROM wears JOIN product_image ON(product_image.product_id = wears.id)
				// 	WHERE product_image.product_id = '$id' AND product_image.category_id = '$cat' AND product_image.icon_image = 1";
				// $result1 = mysqli_query($conn,$sql1);
				// $row = mysqli_fetch_assoc($result1);
				if($cat == 1){
					$sql1 = "SELECT product_image.image,phone_tablet.name,phone_tablet.price FROM product_image JOIN phone_tablet ON(product_image.product_id = phone_tablet.id) WHERE product_image.product_id = '$id' AND product_image.category_id = '$cat' AND product_image.icon_image = 1";
					$result1 = mysqli_query($conn,$sql1);
					$row = mysqli_fetch_assoc($result1);
			
				?>

					<p><div class="col l4 m6 s12" ><img src="<?php echo $row['image'] ?>" class="responsive-img cartCont">
					<p><?php echo $row['name'] ?></p>
					<p>Php: <?php echo $row['price'] ?></p>
					<p><a href="remove_to_cart.php?index=<?php echo $x ?>" class="btn red white-text"><i class="large material-icons left white-text">remove_shopping_cart</i>Remove cart</a></p>
					</div></p>

				<?php }else if($cat == 3){ 

					$sql1 = "SELECT product_image.image,wears.name,wears.price FROM product_image JOIN wears ON(product_image.product_id = wears.id) WHERE product_image.product_id = '$id' AND product_image.category_id = '$cat' AND product_image.icon_image = 1";
					$result1 = mysqli_query($conn,$sql1);
					$row = mysqli_fetch_assoc($result1);
				?>
					<p><div class="col l4 m6 s12 " ><img src="<?php echo $row['image'] ?>" class="responsive-img wearImg">
					<p><?php echo $row['name'] ?></p>
					<p>Php: <?php echo $row['price'] ?></p>
					<p><a href="remove_to_cart.php?index=<?php echo $x ?>" class="btn red white-text"><i class="large material-icons left white-text">remove_shopping_cart</i>Remove cart</a></p>
					</div></p>

				<?php } ?>
				<?php } } ?>
		
		<div class="row">
			<div class="col l12 m12 s12">
				<p><a href="#checkout" class="btn green modal-trigger">Proceed to Checkout</a></p>
			</div>
		</div>
	<?php }else { ?>
	<h2>No item to display</h2>
	<p><a href="index.php#shop">Continue Shopping</a></p>
	<?php } ?>
	</div>
	<div id="checkout" class="modal">
    <div class="modal-content">
      <h4>Proceed?</h4>
      <?php 
      $users = $_SESSION['username'];
      $sql = "SELECT * FROM users WHERE user_name = '$users'"; 

		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
      ?>
      <p><?php echo ucfirst($user['first_name']) ?> <?php echo ucfirst($user['last_name']) ?></p>
      <?php 
      $total = 0;
      $allTotal = 0;
      foreach ($_SESSION['cart'] as $index) {
      	foreach ($index as $id => $cat) {
      		$total = $row['price'];
      		$sql1 = "SELECT name,price FROM phone_tablet WHERE id = '$id' AND category_id = '$cat'
				UNION ALL
				SELECT name,price FROM wears
				WHERE id = '$id' AND category_id = '$cat'";
			$result1 = mysqli_query($conn,$sql1);
			$row = mysqli_fetch_assoc($result1); ?>

			<p class="green-text"><?php echo $row['name'] ?></p>
			<p><?php echo $row['price'] ?></p>
			<div class="divider"></div>
     <?php 
     		$allTotal += $total;
     	}
      }
      ?>
      <form action="checkout_endpoint.php?total=<?php echo $allTotal; ?>" method="post">
      <h5 class="center">Grand Total: <?php echo $allTotal; ?></h5>
      <div class="row">
		<div class="input-field col l12 m12 s12">
			<textarea id="delivery_add" class="materialize-textarea" name="delivery_add"></textarea>
			<label for="delivery_add">Delviery Address</label>
		</div>
		<div class="col l12 m12 s12">
			<a href="#" class="getAdd btn" id="<?php echo $users ?>">Click here to get current address</a>
		</div>
    </div>
    <div class="modal-footer">
      <input type='submit' class="waves-effect waves-green btn green" value="BUY NOW">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red white-text">CANCEL</a>
  	</form>
    </div>
  </div>
	<?php }
	require "template.php";
	?>