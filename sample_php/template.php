<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"/>
  <title>Sample PHP</title>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>

	<?php require "partials/nav.php"; ?>
  


<div class="row">
<div class='col l9' id="display">
  <div class='row'><?php  display_content(); ?>
  </div>
</div>
<div class="col l3 card-panel">
<div class="row">      
<?php require "sidebar.php"; ?>
  </div>
</div>

</div>
  <?php require "partials/footer.php"; ?>
</body>
</html>