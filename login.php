<?php include "db.php";?><!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body>
<div class="container-fluid">
        <h1>Login</h1>
        <div class="login-page">
            <form action="login_signup.php" method="POST" >
                <input type="hidden" name="action" value="login">
                <label for="username">Username</label>
                <i class="fa fa-user" style="color: #000000;"></i>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <i class="fa fa-lock" style="color: #000000;"></i>
                <input type="password" name="password" id="password">
                <label class="check">
                    <input type="checkbox" name="checkbox" value="">
                    <span class="check-label">Remember Me</span>
                </label>
                <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                <input type="submit" name="submit" id="submit">
            <div class="social-media">
                <span><a href="register.php" style="text-decoration: none;">Or Sign Up Using</a></span>
                <div class="social-icons">
                    <a href=""><img src="social-icons/facebook.png" alt=""></a>
                    <a href=""><img src="social-icons/google.png" alt=""></a>
                    <a href=""><img src="social-icons/twitter.png" alt=""></a>
                </div>
                <a href="signup.php" style="text-decoration: none;">Create an Account</a>
            </div>
            </form>
        </div>
    </div>
  
</body>
</html>
