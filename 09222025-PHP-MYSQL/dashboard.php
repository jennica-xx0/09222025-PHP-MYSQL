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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="navbar">
            <h2>Welcome, <span id="username"><?php echo htmlspecialchars($user['fullname']); ?></span></h2>
             <a href="logout.php">
                <button id="logout" class="btn logout-btn">Logout <i class="fas fa-sign-out-alt"></i></button>
            </a>
        </nav>

        <div class="user-details">
            <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" 
                 alt="profile-picture" 
                 style="border-radius:8px" 
                 height="150px" width="150px">
            <h3>Your Profile</h3>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($user['fullname']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <div class="dashboard-actions">
            <button class="btn">Update Profile</button>
            <button class="btn">View Reports</button>
            <button class="btn">Settings</button>
        </div>

        <div class="upload-section">
            <h3>Update Profile Picture</h3>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="profile_image" accept="image/*" required>
                <button type="submit" class="btn">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>
