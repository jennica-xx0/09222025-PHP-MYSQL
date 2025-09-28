<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[url('https://t3.ftcdn.net/jpg/02/92/90/56/360_F_292905667_yFUJNJPngYeRNlrRL4hApHWxuYyRY4kN.jpg')] min-h-screen w-full bg-cover bg-center bg-no-repeat flex justify-center items-center">

    <div class="max-w-md w-full bg-gray-100 p-6 rounded-2xl shadow-lg space-y-6">
        <h1 class="text-3xl font-bold font-mono text-center text-gray-800">Login</h1>

        <form action="login.php" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-semibold">Email</label>
                <input id="email" name="email" type="email" required
                    class="w-full border-2 border-gray-300 rounded-md p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter your email" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full border-2 border-gray-300 rounded-md p-2 mt-1 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Enter your password" />
            </div>

            <!-- Login Button -->
            <div>
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-md hover:bg-indigo-700 transition">
                    Login
                </button>
            </div>
        </form>

        <p class="text-center text-gray-700">Don’t have an account? 
            <a href="index.php" class="text-indigo-600 hover:underline">Register here</a>
        </p>
    </div>

</body>
</html>
