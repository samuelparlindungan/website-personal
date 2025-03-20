<?php
/*
    File ini ada di
    /pages/login.php
*/
include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 25rem;">
            <h2 class="text-center">Login</h2>
            <form action="../includes/login_process.php" method="POST">
                <div class="mb-3">
                    <label>Username atau Email</label>
                    <input type="text" name="user_input" class="form-control" placeholder="Masukkan Username atau Email" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>
