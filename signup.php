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
        <form class="form" id="createAccount" method="POST" action="action.php">
            <h1 class="form_title2">Create an Account with Cardex</h1>
            <?php if(isset($_GET['emailexist']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red; font-weight:bold;'>Email already exist in our database</p>";
            ?>
            <?php if(isset($_GET['password']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red; font-weight:bold;'>Password and Confirm Password does not match</p>";
            ?>
            <div class="form_message form_message--error"></div>
            <p>Full Name</p>
            <div class="form_input-group">
                <input type="text" id="signupUsername" class="form_input" autofocus placeholder="Adeem Onyema Gabriel" name="fullname" required value="<?php if(isset($_POST['fullname'])){echo $_POST['fullname'];}?>">
                <div class="form_input-error-message"></div>
            </div>
            <p>
                Email
            </p>
            <div class="form_input-group">
                <input type="emaiil" class="form_input" autofocus placeholder="@gmail.com" required name="email">
                <div class="form_input-error-message"></div>
            </div>
            <p>
                Create Password
            </p>
            <div class="form_input-group">
                <input type="password" class="form_input" autofocus placeholder="Password" required name="password">
                <div class="form_input-error-message"></div>
            </div>
            <p>
                Confirm Password
            </p>
            <div class="form_input-group">
                <input type="password" class="form_input" autofocus placeholder="Confirm password" required name="conpass">
                <div class="form_input-error-message"></div>
            </div>
             <p class="form_textr">
              Already have an account?  <a class="form_link" href="login.php" id="linkLogin"> Sign in</a>
            </p>
            <button class="form_button" type="submit" name="register">Create Account</button>
             <p class="form_text">OR</p>   
            <button class="form_button2" type="submit">Sign up with Google</button>         
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
