<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="login.css">   
    </head>
    <body background="wallpaper.jpg">
        <div class="reg_form">
            <h1 align = "center" style="margin: 0;">LOGIN</h1>
            <form method='POST' action="login_logic.php">
                <p class="labels">Staff ID: <br/>
                    <input type="text" name="login_username" class="register" placeholder="Enter Your Staff ID" required />
                </p>
                
                <p class="labels">Password: <br/>
                    <input type="password" name="login_password" class="register" placeholder="Type Your Password"required />
                </p>
                
                <input type="submit" name="user_login_btn" class="button" value="Login" />
            </form>
        </div>
    </body>
</html>