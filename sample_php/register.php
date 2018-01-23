
<?php 
function display_content(){ ?>
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form" method="POST" action="register_endpoint.php" >
      <div class="row">
        <div class="input-field col s12">
          <input id="fullName" type="text"  >
          <label for="first_name">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username1" type="text" name="username1" >
          <label for="email">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password"  name="password" >
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
              <div class="input-field col s12">
          <input id="confirm_password" type="password"  >
          <label for="confirm_password">Confirm Password</label>
          <span class="error hide" id="error"></span>
        </div>
        </div>
      <div class="row">
       

        <div class="input-field col s6">
          <input class="btn btn-large" type="submit" name="action" value="Register" id="submitBtn" >
        </div>
      </div>
    </form>
  </div>
</div>

<?php } 
require "template.php";
?>

