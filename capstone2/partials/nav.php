<?php 
$user = "";
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
	$role = $_SESSION['role'];
}
?>
<div class="navbar-fixed" id="divnav">
	<nav class="z-depth-0 " id="nav">
		<div class="nav-wrapper">
			<a href="index.php" class="brand-logo green-text font" id="logo"><i class="large material-icons left green-text" id="logosize">android</i><span class="hide-on-small-only">andriodShop</span></a>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons green-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#" class="green-text font dropdown-button" data-activates='dropdown1'>Shopping<i class="material-icons right green-text">arrow_drop_down</i></a></li>
				<li><a href="badges.html" class="green-text font">About Us</a></li>
				<li><a href="#contactUs" class="green-text font">Contact Us</a></li>
				<?php if(isset($_SESSION['username'])){

				}else {
					echo '<li><a href="#modal1" class="green-text font modal-trigger">Log in/Register</a></li>';
				} ?>
				<?php if(isset($_SESSION['username'])){
					echo "<li id='navIcon'><a href='#' class='green-text font dropdown-profile' data-activates='dropdown_profile'><i class='material-icons left green-text'>account_circle</i><i class='material-icons green-text'>arrow_drop_down</i></a>
					</li>";
				} ?>

			</ul>
			<?php
				if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
					echo "<ul id='dropdown_profile' class='dropdown-content'>";
					echo isset($_SESSION['username']) ? '<li><span class="black-text">Welcome '.$user.'</span></li>' : '' ;
					echo "<li class='divider'></li>
						<li><a href='admin_item_page.php' class='green-text'>Edit/Add Items</a></li>
						<li class='divider'></li>
						<li><a href='logout.php' class='green-text'>Log Out</a></li>";
				}else {
			?>	
			<ul id='dropdown_profile' class='dropdown-content'>
				<?php
				echo isset($_SESSION['username']) ? '<li><span class="black-text">Welcome '.$user.'</span></li>' : '' ;
				?>
				<li class="divider"></li>
				<li><a href="#!" class="green-text">Edit Profile</a></li>
				<li class="divider"></li>
				<li><a href="cart.php" class="green-text"><i class="large material-icons left green-text">add_shopping_cart</i>Cart</a></li>
				<li class="divider"></li>
				<li><a href="logout.php" class="green-text">Log Out</a></li>
				

			</ul>
			<?php } ?>
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="mobile.php" class="green-text"><i class="material-icons left green-text">phone_android</i>Mobile</a></li>
				<li class="divider"></li>
				<li><a href="#!" class="green-text"><i class="material-icons left green-text">tablet_android</i>Tablet</a></li>
				<li class="divider"></li>
				<li><a href="wear.php" class="green-text"><i class="material-icons left green-text">watch</i>Wear</a></li>
				<li class="divider"></li>
				<li><a href="#!" class="green-text"><i class="material-icons left green-text">tv</i>TV</a></li>

			</ul>
			<ul id="slide-out" class="side-nav">
				<li><a href="index.php" class="green-text font" id="logo"><i class="small material-icons left green-text" >android</i><span>andriodShop</span></a>
				</li>
				<li class="divider"></li>
				<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
						<li>
							<a class="collapsible-header">Shopping<i class="material-icons">arrow_drop_down</i></a>
							<div class="collapsible-body">
								<ul>
									<li><a href="mobile.php" class="green-text"><i class="material-icons left green-text">phone_android</i>Mobile</a></li>
									<li><a href="#!" class="green-text"><i class="material-icons left green-text">tablet_android</i>Tablet</a></li>
									<li><a href="#!" class="green-text"><i class="material-icons left green-text">watch</i>Wear</a></li>
									<li><a href="#!" class="green-text"><i class="material-icons left green-text">tv</i>TV</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li class="divider"></li>
				<li><a href="#!">About Us</a></li>
				<li class="divider"></li>
				<li><a href="#contactUs">Contact Us</a></li>
				<li class="divider"></li>
				<li><a href="#modal1" class="modal-trigger">Log In/Register</a></li>
			</ul>
		</div>
	</nav>
</div>