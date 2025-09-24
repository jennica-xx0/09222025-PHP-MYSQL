<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);     
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email already registered. Please login.');
        window.location.href = 'index1.php';</script>";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Default profile picture
        $defaultImage = "image/default.png";

        // Insert new user
        $sql = "INSERT INTO users(fullname, email, password, profile_image) 
                VALUES ('$fullname', '$email', '$hashed_password', '$defaultImage')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Account created successfully! Please log in.');
            window.location.href = 'index1.php';</script>";
        } else {
            echo "Error: " . $sql . " - " . $conn->error;
        }
    }
}
?>
