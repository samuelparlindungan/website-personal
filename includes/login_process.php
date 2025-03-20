<?php
/*
    File ini ada di
    /includes/login_process.php
*/
session_start();
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = trim($_POST["user_input"]);
    $password = trim($_POST["password"]);

    $query = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $user_input, $user_input);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["username"];
        header("Location: ../pages/dashboard.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!'); window.location.href = '../pages/login.php';</script>";
    }
}
?>
