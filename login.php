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
            <h1 class="form_title">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align: -0.125em;" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="none" d="M8.007 24.93A4.996 4.996 0 0 1 13 20h6a4.996 4.996 0 0 1 4.993 4.93a11.94 11.94 0 0 1-15.986 0ZM20.5 12.5A4.5 4.5 0 1 1 16 8a4.5 4.5 0 0 1 4.5 4.5Z"/><path fill="currentColor" d="M26.749 24.93A13.99 13.99 0 1 0 2 16a13.899 13.899 0 0 0 3.251 8.93l-.02.017c.07.084.15.156.222.239c.09.103.187.2.28.3c.28.304.568.596.87.87c.092.084.187.162.28.242c.32.276.649.538.99.782c.044.03.084.069.128.1v-.012a13.901 13.901 0 0 0 16 0v.012c.044-.031.083-.07.128-.1c.34-.245.67-.506.99-.782c.093-.08.188-.159.28-.242c.302-.275.59-.566.87-.87c.093-.1.189-.197.28-.3c.071-.083.152-.155.222-.24ZM16 8a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 16 8ZM8.007 24.93A4.996 4.996 0 0 1 13 20h6a4.996 4.996 0 0 1 4.993 4.93a11.94 11.94 0 0 1-15.986 0Z"/></svg> Log in</h1>
            <p>Fill the form below to log in your account</p>
            <?php if(isset($_GET['message']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Invalid Email Or Password</p>";
            ?>
			<?php if(isset($_GET['update']) )
                echo "<p class='alert alert-success text-center' align='center' style='color:green'>Password Reset Successful<br/>Please log in with your new username and password</p>";
            ?>
			<?php if(isset($_GET['regsuc']) )
                echo "<p class='alert alert-success text-center' align='center' style='color:green'>Registration Successful<br/>Please log in with your new username and password</p>";
            ?>
			<?php if(isset($_GET['acc']) )
                 echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Please login/register to access this page</p>";
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
            
             <button class="form_button2" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align: -0.125em;" width="0.98em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"/><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/></svg> Continue with Google</button>
            <p class="form_text">
               Don't have an account? <a class="form_link" href="signup.php" id="linkCreateAccount"> Sign up</a>
            </p>
        </form>
        
    </div>
    <script src="js/app.js"></script>
</body>
</html>
