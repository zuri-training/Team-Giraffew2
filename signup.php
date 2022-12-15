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
            <h1 class="form_title"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align: -0.125em;" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="currentColor" d="M189.7 122.3a8.1 8.1 0 0 1 0 11.4l-72 72a8.5 8.5 0 0 1-5.7 2.3a8.3 8.3 0 0 1-5.7-2.3a8.1 8.1 0 0 1 0-11.4l58.4-58.3H32a8 8 0 0 1 0-16h132.7l-58.4-58.3a8.1 8.1 0 0 1 11.4-11.4ZM216 32a8 8 0 0 0-8 8v176a8 8 0 0 0 16 0V40a8 8 0 0 0-8-8Z"/></svg> Sign up</h1>
            <p> Fill the form below to get a free account</p>
            <?php if(isset($_GET['emailexist']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red; font-weight:bold;'>Email already exist in our database</p>";
            ?>
            <?php if(isset($_GET['password']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red; font-weight:bold;'>Password and Confirm Password does not match</p>";
            ?>
            <div class="form_message form_message--error"></div>
            <div class="form_input-group">
                <input type="text" id="signupUsername" class="form_input" autofocus placeholder="full name" name="fullname">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="text" class="form_input" autofocus placeholder="email address" name="email">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form_input" autofocus placeholder="create Password" name="password">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form_input" autofocus placeholder="Confirm password" name="conpass">
                <div class="form_input-error-message"></div>
            </div>
             <p class="form_textr">
              Already have an account?  <a class="form_link" href="login.php" id="linkLogin"> Sign in</a>
            </p>
            <button class="form_button" type="submit" name="register">Create Account</button>
             <p class="form_text">OR</p>   
            <button class="form_button2" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align: -0.125em;" width="0.98em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 262"><path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622l38.755 30.023l2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"/><path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055c-34.523 0-63.824-22.773-74.269-54.25l-1.531.13l-40.298 31.187l-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"/><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82c0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"/><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0C79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"/></svg> Continue with Google</button>    
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
