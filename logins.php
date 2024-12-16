<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nest Point</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <h1>LOGIN</h1>
    <div class="seller_login">
        <form method="post" action="seller_login_submit.php">
            <h3>SELLER</h3>
            <div class="fields">
                <input type="text" name="seller_user_id_login" id="seller_user_id_login" placeholder="USERID" required>
            </div>
            <div class="fields">
                <input type="password" name="seller_password_login" id="seller_password_login" placeholder="PASSWORD" required>
            </div>
            <div class="fields">
                <input type="submit" value="LOGIN">
            </div>
        </form>
        <div class="redirect">
        <h4>Don't have an account? </h4><a href="seller_registration_form.php">SIGNUP</a>
    </div>
    </div>
</body>
</html>
