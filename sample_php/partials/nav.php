<?php 
$user = "";
    if(isset($_SESSION['username'])){
      $user = $_SESSION['username'];
    }
  ?>
<nav>
    <div class="nav nav-wrapper">
      <a href="#" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if(isset($_SESSION['username'])){
      echo "<li><a href='cart.php'><i class='material-icons'>shopping_cart</i></a></li>";
      } ?>
      <li><i class="material-icons">person </i></li>
      <li> <?php echo $user; ?></li>
      <?php if(isset($_SESSION['username'])){
        echo "<li><a href='logout.php'>Logout</a></li>";
        } else {
          echo "<li><a href='#username'>Login</a></li>";
        } ?>
      </ul>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="method.php">Method</a></li>
        <li><a href="items.php">Items</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
