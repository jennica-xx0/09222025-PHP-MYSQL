<?php
session_start();
include("connect.php");

if (!isset($_SESSION['user'])) {
    header("Location: index1.php");
    exit;
}

$email = $_SESSION['user'];
$sql = "SELECT fullname, email, profile_image FROM users WHERE email='$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white px-6 py-3 flex justify-between items-center">
        <h2 class="text-lg font-semibold">Welcome, <?php echo htmlspecialchars($user['fullname']); ?></h2>
        <a href="logout.php">
            <button class="bg-red-500 px-3 py-1 rounded hover:bg-red-600">Logout</button>
        </a>
    </nav>

    <!-- Main Content -->
    <main class="flex flex-col md:flex-row flex-1 p-6 gap-6">
        <!-- Profile Card -->
        <div class="bg-white p-4 rounded shadow w-full md:w-1/3 text-center">
            <img src="<?php echo htmlspecialchars($user['profile_image']); ?>"
                alt="profile-picture"
                class="mx-auto rounded-full w-28 h-28 object-cover">
            <h3 class="text-xl font-bold mt-3"><?php echo htmlspecialchars($user['fullname']); ?></h3>
            <p class="text-gray-600"><?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <!-- Actions -->
        <div class="flex-1 space-y-6">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold mb-3">Actions</h3>
                <div class="flex flex-col gap-3">
                    <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded">Update Profile</button>
                    <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">View Reports</button>
                    <button class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded">Settings</button>
                </div>
            </div>

            <!-- Upload Profile -->
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold mb-3">Update Profile Picture</h3>
                <form action="upload.php" method="POST" enctype="multipart/form-data" class="space-y-3">
                    <input type="file" name="profile_image" accept="image/*"
                        class="block w-full border p-2 rounded">
                    <button type="submit"
                        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-600">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
