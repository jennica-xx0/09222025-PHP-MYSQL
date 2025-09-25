<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[url('https://upload.wikimedia.org/wikipedia/commons/7/71/Gli-Gli_Barangay_Hall_SGA.jpg')] h-screen w-full bg-cover bg-center bg-no-repeat flex justify-center items-center">
    <div class="max-y-[60px] bg-white/70 p-4 space-y-4 rounded-2xl flex-row justify-center items-center">
        <h1 class="justify-self-center font-bold text-2xl font-mono m-6">Create Account</h1>
        <div>
            <h1 class="justify-self-center items-center font-semibold">Fullname</h1>
            <input class="w-full border-2 rounded-md p-1 mt-2" type="text" name="fullname" placeholder="Enter your name" required />
        </div>

        <div>
            <h1 class="justify-self-center items-center px-10 font-semibold">Email</h1>
            <input class=" w-full rounded-md border-2 p-1" type="email" name="email" placeholder="Enter your email" required />
        </div>

        <div>
            <h1 class="justify-self-center items-center px-10 font-semibold">Password</h1>
            <input class=" w-full border-2 rounded-md p-1 border-spacing-2" type="password" name="password" placeholder="Enter your password" required />
        </div>

        <div>
            <button class="justify-self-center items-center px-16 w-full font-semibold" type="submit">Register</button>
        </div>
        </form>

        <p class="justify-self-center m-4">Already have an account? <a href="index1.php" class="text-red-800">Login here</a></p>
    </div>
</body>

</html>