
<?php function display_content(){	
	require 'connection.php';
 ?>

<div class="row center viewWearCont grey lighten-4">
	<div class="col l12 m12 s12">
		<h5 class="z-depth-3 green lighten-1 white-text">History Order</h5>
	</div>
	<div class="row">
		<div id="edit" class="col s12">
			<div class="row">
				<div class="input-field col l3">
					<select id="categoriesorder">
						<option value="all" selected>all records</option>
						<?php
						$sql = "SELECT * FROM category";
						$result = mysqli_query($conn, $sql);
						while($rows = mysqli_fetch_assoc($result)) {
							?>
							<option value="<?php echo $rows['id'] ?>"><?php echo $rows['category_name'] ?></option>
							<?php } ?>
					</select>

					<label>Choose Products</label>
				</div>
				<div class=" col l3">
					<form>
						<div class="input-field">
							<i class="material-icons prefix">textsms</i>
							<input type="text" id="autocomplete-input" class="autocomplete">
							<label for="autocomplete-input">Autocomplete</label><p id="nameAppear"></p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col l12 m12 s12" id="body_order">
			

		</div>
	</div>
</div>


<?php } 
require "template.php";
?>