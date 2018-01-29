

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
<!--     <h5 class="center-align font green-text">LOG IN</h5> -->
   <!--  <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 48px 0px 48px; border: 2px solid green;">

        <form class="col s12" method="post" action="authenticate.php">


          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='text' name='username' id='username' />
              <label for='username'>Enter your username</label>
            </div>
          </div>

          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='password' name='password' id='password' />
              <label for='password'>Enter your password</label>
            </div>
            <label class="right">
              <a class='green-text' href='register.php'><b>Register Here</b></a>
            </label>
          </div>


          <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>Login</button>
          </div>
        </form>
      </div>
    </div> -->
    <div class="container white z-depth-2" id="cont">
  <ul class="tabs teal row" id="rowCont">
    <li class="tab col s6"><a class="white-text active" href="#login" id="tabsColor">login</a></li>
    <li class="tab col s6"><a class="white-text" href="#register" id="tabsColor">register</a></li>
  </ul>
  <div id="login" class="col s12">
    <form class="col s12" action="authenticate.php" method="post">
      <div class="form-container">
        <h3 class="green-text teal-text">Log In</h3>
        <div class="row">
          <div class="input-field col s12">
            <input id="username" type="text" class="validate" name="username">
            <label for="email">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <br>
        <center>
          <button class="btn waves-effect waves-light teal green white-text" type="submit" name="action">Connect</button>
        </center>
      </div>
    </form>
  </div>
  <div id="register" class="col s12">
    <form class="col s12" id="reg-form" action="register_endpoint.php" method="post">
      <div class="form-container">
        <h3 class="green-text teal-text">Register</h3>
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" name="first_name">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="last_name">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="username1" type="text" class="validate" name="username1">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="reg_email" type="email" class="validate" name="reg_email">
            <label for="reg_email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <textarea id="address" class="materialize-textarea" name="address"></textarea>
          <label for="address">Address</label>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="reg_password" type="password" class="validate" name="reg_password">
            <label for="reg_password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="confirm_password" type="password" class="validate">
            <label for="confirm_password">Password Confirmation</label>
            <span class="error hide" id="error"></span>
          </div>
        </div>
        <center>
          <button class="btn waves-effect waves-light green white-text" type="submit" name="action" id="submitBtn">Submit</button>
        </center>
      </div>
    </form>
  </div>
</div>
  </div>

</div>