<!DOCTYPE html>
<html lang="en">
  <?php include"head.php"?>
<body>
    <div class="container-fluid">
        <h1>SignUp</h1>
        <div class="login-page">
            <form action="login_signup.php" method="POST">
                <input type="hidden" name="action" value="signup">
                <label for="username">Username</label>
                <i class="fa fa-user" style="color: #000000;"></i>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <i class="fa fa-lock" style="color: #000000;"></i>
                <input type="password" name="password" id="password">
                <input type="submit" name="submit" id="submit">
            <div class="social-media">
                <span>Or Sign Up Using</span>
                <div class="social-icons">
                    <a href=""><img src="social-icons/facebook.png" alt=""></a>
                    <a href=""><img src="social-icons/google.png" alt=""></a>
                    <a href=""><img src="social-icons/twitter.png" alt=""></a>
                </div>
                <a href="signup.php" style="text-decoration: none;">Login Here</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
