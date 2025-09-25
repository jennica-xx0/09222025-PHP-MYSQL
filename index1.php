<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="h-full flex justify-center items-center">
    <div class=" border-4 border-red-400 rounded-2xl p-7 outline outline-4 outline-indigo-500 m-30">
        <h1 class="justify-self-center font-bold text-2xl font-mono m-3 p-2">Login</h1>
        <form class="justify-self-center -mr-3" action="login.php" method="POST">
          
          <div>
            <h1 class="justify-self-center items-center px-10 font-semibold m-2 mr-5">Email</h1>
            <input class="border-2 border-spacing-2 mr-2 p-1" type="email" name="email" placeholder="Enter your email" required />
          </div>

     `    <div>
             <h1 class="justify-self-center items-center px-10 font-semibold m-2 mr-5">Password</h1>
            <input class="border-2 border-spacing-1 p-1" type="password" name="password" placeholder="Enter your password" required />
          </div>

            <button class="justify-self-center items-center font-semibold px-12 m-6" type="submit">Login</button>
        </form>

        <p class="justify-self-center m-3">Don’t have an account? <a href="index.php" class="text-red-800">Register here</a></p>
    </div>
</body>
</html>