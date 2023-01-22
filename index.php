<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="homeS.css">


<div class="login-box">
    <form action="login.php" method="post">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
        </div>
        <input type="submit" class="btn" value="Sign in">
        <a href="signup.php">Sign Up</a>
    </form>
</div>