<?php
/*
    File ini ada di
    /includes/register_process.php
*/
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        die("<script>alert('Password harus memiliki minimal 8 karakter, termasuk huruf besar, kecil, angka, dan simbol!'); window.location.href = '../pages/register.php';</script>");
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        die("<script>alert('Email sudah terdaftar!'); window.location.href = '../pages/register.php';</script>");
    }

    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $passwordHash);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = '../pages/login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan!');</script>";
    }

    $stmt->close();
}
?>
