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
        echo "Email already has an account";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert only if email is not found
        $sql = "INSERT INTO users(fullname, email, password) 
                VALUES ('$fullname', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Account Created!!";
        } else {
            echo "Error: " . $sql . " - " . $conn->error;
        }
    }
}
?>
    