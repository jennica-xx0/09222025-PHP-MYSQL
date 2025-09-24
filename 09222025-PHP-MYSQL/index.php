<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Create Account</h1>
        <form action="register.php" method="POST">
            <input type="text" name="fullname" placeholder="Enter your name" required />
            <input type="email" name="email" placeholder="Enter your email" required />
            <input type="password" name="password" placeholder="Create password" required />
            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="index1.php">Login here</a></p>
    </div>
</body>
</html>
