<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[url('https://t3.ftcdn.net/jpg/02/92/90/56/360_F_292905667_yFUJNJPngYeRNlrRL4hApHWxuYyRY4kN.jpg')] min-h-screen w-full bg-cover bg-center bg-no-repeat flex justify-center items-center">
    <div class="max-y-[60px] bg-gray-100 p-10 -mr-150 rounded-2xl flex-row justify-center items-center">
        <h1 class="justify-self-center font-bold text-2xl font-mono m-6">Create Account</h1>

        <!-- ✅ Add your form here -->
        <form action="register.php" method="POST" class="space-y-4">

            <div>
                <h1 class="justify-self-center items-center font-semibold">Fullname</h1>
                <input class="w-full border-2 rounded-md p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-500 " type="text" name="fullname" placeholder="Enter your name" required />
            </div>

            <div>
                <h1 class="justify-self-center items-center px-10 font-semibold">Email</h1>
                <input class="w-full rounded-md border-2 p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 " type="email" name="email" placeholder="Enter your email" required />
            </div>

            <div>
                <h1 class="justify-self-center items-center px-10 font-semibold">Password</h1>
                <input class="w-full border-2 rounded-md p-3 border-spacing-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 " type="password" name="password" placeholder="Enter your password" required />
            </div>

            <div>
                <button class="justify-self-center items-center px-16 w-full font-semibold bg-blue-500 text-white rounded-md p-2 mt-4 hover:bg-blue-600" type="submit">
                    Register
                </button>
            </div>
        </form>
        <!-- ✅ End of form -->

        <p class="justify-self-center m-4">Already have an account? 
            <a href="index1.php" class="text-red-800">Login here</a>
        </p>
    </div>
</body>

</html>
