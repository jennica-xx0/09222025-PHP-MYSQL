<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-full flex justify-center items-center ">

<!-- <div class="space-y-20 border-4 border-red-400 rounded-2xl inset-shadow-sm inset-shadow-indigo-500 m-10 p-6"> -->
<div class="border-4 border-red-400 rounded-2xl p-6 outline outline-4 outline-indigo-500">       
<h1 class="justify-self-center font-bold text-2xl font-mono">Create Account</h1>
        <form class="justify-self-center space-y-5 " 
            action="register.php" method="POST">

            <div class="">
                <h1 class="justify-self-center items-center px-10 font-semibold">Fullname</h1>
                <input class="border-2 border-spacing-2"
                    type="text" name="fullname" placeholder="Enter your name" required />
            </div>

            <div class="">
                <h1 class="justify-self-center items-center px-10 font-semibold">Email</h1>
                <input class="border-2 border-spacing-2"
                    type="text" name="fullname" placeholder="Enter your email" required />
            </div>


            <div class="">
                <h1 class="justify-self-center items-center px-10 font-semibold">Password</h1>
                <input class="border-2 border-spacing-2"
                    type="text" name="fullname" placeholder="Enter your password" required />
            </div>
            <button class="justify-self-center items-center px-16 font-semibold"
                type="submit">Register</button>
        </form>

        <p class="justify-self-center">Already have an account? <a href="index1.php" class="text-red-800">Login here</a></p>
    </div>
</body>

</html>