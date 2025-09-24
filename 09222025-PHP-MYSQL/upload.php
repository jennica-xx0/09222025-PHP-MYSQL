<?php
session_start();
include("connect.php");

if (!isset($_SESSION['user'])) {
    header("Location: index1.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_image"])) {
    $email = $_SESSION['user'];

    $targetDir = "uploads/"; // Folder where images will be stored
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["profile_image"]["name"]);
    $targetFile = $targetDir . uniqid() . "_" . $fileName; // unique name
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Allow only images
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($fileType, $allowedTypes)) {
        echo "<script>alert('Only JPG, JPEG, PNG & GIF files are allowed.'); 
              window.location.href='dashboard.php';</script>";
        exit;
    }

    // Move uploaded file
    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
        // Update DB
        $sql = "UPDATE users SET profile_image='$targetFile' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Profile picture updated!'); 
                  window.location.href='dashboard.php';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "<script>alert('Error uploading file.'); window.location.href='dashboard.php';</script>";
    }
}
?>
