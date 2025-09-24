<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required />
            <input type="password" name="password" placeholder="Enter your password" required />
            <button type="submit">Login</button>
        </form>

        <p>Don’t have an account? <a href="index.php">Register here</a></p>
    </div>
</body>
</html>
