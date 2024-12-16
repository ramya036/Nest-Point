<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nest Point Admin Login</title>
    <link href="login.css" rel="stylesheet">
</head>
<body>
    <h1>Admin Login</h1>
    <div class="admin_login">
        <form method="post" action="admin_login_submit.php">
            <h3>Admin</h3>
            <div class="fields">
                <input type="text" name="admin_user_id_login" id="admin_user_id_login" placeholder="USERID" required>
            </div>
            <div class="fields">
                <input type="password" name="admin_password_login" id="admin_password_login" placeholder="PASSWORD" required>
            </div>
            <div class="fields">
                <input type="submit" value="LOGIN">
            </div>
        </form>
        <div class="redirect">
            <h4>Don't have an account?</h4>
            <a href="admin_registration_form.php">SIGNUP</a>
        </div>
    </div>
</body>
</html>