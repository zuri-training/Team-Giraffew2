<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/signup </title>
    <link rel="stylesheet" href="css/login.css">
</head>
<div class="container">
        <form class="form" id="login" action="action.php" method="POST">
            <h1 class="form_title">Cardex</h1>
            <p class="form_title2">Log into your account</p>
            <?php if(isset($_GET['message']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Invalid Email Or Password</p>";
            ?>
			<?php if(isset($_GET['update']) )
                echo "<p class='alert alert-success text-center' align='center' style='color:green'>Password Reset Successful<br/>Please log in with your new username and password</p>";
            ?>
			<?php if(isset($_GET['regsuc']) )
                echo "<p class='alert alert-success text-center' align='center' style='color:green'>Registration Successful<br/>Please log in with your new username and password</p>";
            ?>
            <p>Username</p>
            <div class="form_message form_message--error"></div>
            <div class="form_input-group">
                <input type="email" class="form_input" autofocus placeholder="Username" required name="email">
                <div class="form_input-error-message"></div>
            </div>
            <p>password</p> 
            <div class="form_input-group">
                <input type="password" class="form_input" autofocus placeholder="*************" required name="password">
                <div class="form_input-error-message"></div>
            </div>
            <p class="form_textr">
                <a href="#" class="form_link">Forgot password?</a>
            </p>
            <button class="form_button" type="submit" name="login">Log in</button>

            <p class="form_text">OR</p>
            
            <button class="form_button2" type="submit">Continue with Google</button>
            <p class="form_text">
               Don't have an account? <a class="form_link" href="signup.php" id="linkCreateAccount"> Sign up</a>
            </p>
        </form>
        
    </div>
    <script src="js/app.js"></script>
</body>
</html>
