<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="register_form.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="form-wrapper">
        <div class="form-container">
            <h2>Register as Admin</h2>
            <form action="admin_register_submit.php" method="POST">
                <div class="form-group">
                    <input type="text" name="admin_name" id="admin_name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="admin_user_id" id="admin_user_id" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="admin_email" id="admin_email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="admin_password" id="admin_password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>
            <div class="redirect">
                <p>Already a member? <a href="login.php">Login now</a></p>
            </div>
        </div>
    </div>
</body>
</html>