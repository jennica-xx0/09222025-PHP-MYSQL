<?php
session_start();  // ✅ Start the session
include "connect.php";

//get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

//fetch database

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

    //check if password is correct
      if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['email'];
            header("Location: dashboard.php");
            exit; // always exit after header
     } else {
            echo "<script>alert('Wrong password'); window.location.href='index1.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with that email'); window.location.href='index.php';</script>";
    }
}
?>