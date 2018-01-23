
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
  



<div class="parallax-container">
    <div class="parallax"><img src="bg1.jpeg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>

  <div class="parallax-container">
    
    <div class="parallax"><img src="bg2.jpg"></div>
  </div>
  <?php require "partials/footer.php"; ?>
</body>
</html>