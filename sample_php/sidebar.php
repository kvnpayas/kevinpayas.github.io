
<?php if(isset($_SESSION['username'])){
    echo "<h2>Hello ".$_SESSION['username'];
} else { ?>
<h2 class="center-align">Login</h2>
<div class="row">
    <form class="col s12" action="authenticate.php" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input id="username" type="text" class="validate" name="username">
                <label for="email">Username</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="pass" type="password" class="validate" name="password">
                <label for="pass">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <p>
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </p>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col m12">
                <p class="right-align">

                    <input class="btn-large waves-effect waves-light" type="submit" name="action" value="SUBMIT">
                    <a class="btn" href="register.php">Register Here</a>
                </p>
            </div>
        </div>
    </form>
</div>
<?php } ?>
