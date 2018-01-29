
<?php function display_content(){ ?>


<div class="slider">

	<ul class="slides">
		<li>
			<img src="assets/img/ad.gif"> <!-- random image -->
			<div class="caption left-align">
				<h3 class="light black-text text-lighten-3">Introducing</h3>
				<h3 class="light black-text text-lighten-3">Android 8.0 Oreo</h3>
				<h5 class="light black-text text-lighten-3">Smarter, faster and more powerful than ever.</h5>
				<h5 class="light black-text text-lighten-3">The world's favorite cookie</h5>
				<h5 class="light black-text text-lighten-3">is your new favorite Android release.</h5>
				<a class="waves-effect waves-light btn green" href="https://developer.android.com/about/versions/oreo/index.html" target="_blank">Read More</a>
			</div>
		</li>
		<li>
			<img src="assets/img/google_pixel2.jpg"> <!-- random image -->
			<div class="caption center-align">
				<h2 class="light green-text">Google Pixel 2</h2>
				<h5 class=" grey-text text-lighten-1">Pixel 2 features a smart camera </h5>
				<h5 class=" grey-text text-lighten-1">that takes beautiful photos in any light,</h5>
				<h5 class="grey-text text-lighten-1">a fast-charging battery </h5>
				<h5 class="grey-text text-lighten-1">and the Google Assistant built-in.</h5>
				<a class="waves-effect waves-light btn green" href="mobileview.php?index=1" target="_blank">Get it now</a>
			</div>
		</li>
		<li>
			<img src="assets/img/1.jpg"> <!-- random image -->
			<div class="caption center-align">
				<h3 class="green-text">Android is for everyone</h3>
				<h5 class="light grey-text text-lighten-3">Android’s open platform helps people around the globe enjoy greater access to more information and opportunity than ever before.</h5>
				<a class="waves-effect waves-light btn green" href="https://www.android.com/everyone" target="_blank">Read More</a>
			</div>
		</li>

	</ul>
</div>

<div class="section white">
	<div class="row container">

		<div class="row">
			<h2 class="header center" id="titleProd">Browse Products</h2>
		</div>
		<ul id="stagered-test">
			<div class="row">
				<li>
					<div class="col l6">
						<img src="assets/img/pixel2.png" class="responsive-img img-scroll" id="img1">
						<p class="center-align"><a href="mobile.php" class="btn green">BROWSE PHONES</a></p>
					</div>
				</li>
				<li>
					<div class="col l6">
						<img src="assets/img/pixel-c.jpg" class="responsive-img img-scroll">
						<p class="center-align"><a href="#" class="btn green">BROWSE TABLETS</a></p>
					</div>
				</li>
			</div>
		</ul>
		<ul id="stagered-test2">
			<div class="row">
				<li>	
					<div class="col l6">
						<img src="assets/img/fossil-q.png" class="responsive-img img-scroll">
						<p class="center-align"><a href="wear.php" class="btn green">BROWSE WEARS</a></p>
					</div>
				</li>
				<li>	
					<div class="col l6">
						<img src="assets/img/bravia.png" class="responsive-img img-scroll">
						<p class="center-align"><a href="#" class="btn green">BROWSE TV</a></p>
					</div>
				</li>
			</div>
		</ul>
	</div>
</div>
<div class="parallax-container">
	<div class="parallax backgroundImage"><img src="assets/img/bg1.jpg"></div>
</div>

<?php } 
	require "template.php";
?>