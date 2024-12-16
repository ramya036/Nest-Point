<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nest Point - Buyer Login</title>
    <link href="login.css" rel="stylesheet"> <!-- Use the correct CSS filename -->
</head>
<body>
    <h1>LOGIN</h1>
    <div class="buyer_login">
        <form method="post" action="buyer_login_submit.php">
            <h3>BUYER</h3>
            <div class="fields">
                <input type="text" name="buyer_user_id_login" id="buyer_user_id_login" placeholder="User ID" required>
            </div>
            <div class="fields">
                <input type="password" name="buyer_password_login" id="buyer_password_login" placeholder="Password" required>
            </div>
            <div class="fields">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="redirect">
        <p>Don't have an account? <a href="buyer_registration_form.php">Signup</a></p>
    </div>
    </div>
    
</body>
</html>
