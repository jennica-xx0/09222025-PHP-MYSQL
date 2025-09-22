<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action ="register.php" method="POST">
            <h1>Join Us</h1>
            <div class="social-container">
                <a href ="#" class="social"><i class ="fab fa-facebook"></i></a>
                <a href ="#" class="social"><i class ="fab fa-google-plus-g"></i></a>
                <a href ="#" class="social"><i class ="fab fa-linkedin-in"></i></a>
            </div>
            <span>Use your Email to SignUp</span>
            <input type="text" name="fullname" placeholder="Enter your name" required/>
            <input type="email" name="email" placeholder="Enter your email" required/>
          
            <input
            type="passsword"
            name="password"
            placeholder="Create password"
            required/>

            <button type="Submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html> 