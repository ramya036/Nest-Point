<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Buyer</title>
    <link rel="stylesheet" href="register_form.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="form-container">
            <h2>Register as Buyer</h2>
            <form action="buyer_register_submit.php" method="POST">
                <div class="form-group">
                    <input type="text" name="buyer_name" id="buyer_name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="buyer_user_id" id="buyer_user_id" placeholder="User Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="buyer_email" id="buyer_email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" name="buyer_password" id="buyer_password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="redirect">
                <p>Already a member? <a href="loginb.php">Login now</a></p>
</div>
            </form>
        </div>
    </div>
</body>
</html>
