<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>

	<!-- Imnports custom stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
	
	<!-- import jquery -->
	<script src="jquery/jquery-3.2.1.js"></script>

	<!--Import custom js-->
	<script type="text/javascript" src="js/script.js"></script>

	<!--Import materialize.js-->
	<script type="text/javascript" src="materialize/js/materialize.js"></script>

</head>
<body>
	
	<?php require('partials/nav.php') ?>
	<?php require('login_register_page.php') ?>
	<main>
	<?php 
    if(isset($_GET['modal'])){
    echo "<script>
    $(document).ready(function(){
      $('#modal1').modal('open');

      });
      </script>"; 
    }
  ?>
  	<?php 
    if(isset($_GET['ban'])){
    echo "<script>
    $(document).ready(function(){
      $('#modal1').modal('open');

      });
      </script>"; 
    }
  ?>

		<?php display_content(); ?>
	</main>
	<?php require('partials/footer.php') ?>

</body>
</html>