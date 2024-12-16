<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Seller</title>
    <link rel="stylesheet" href="register_form.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="form-container">
            <h2>Register as Seller</h2>
            <form action="seller_register_submit.php" method="POST">
                <div class="form-group">
                    <input type="text" name="seller_name" placeholder="Business Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="seller_user_id" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="seller_email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="seller_password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="redirect">
                <p>Already a member? <a href="logins.php">Login now</a></p>
</div>
            </form>
        </div>
    </div>
</body>
</html>
