<?php
/*
    File ini ada di
    /pages/register.php
*/
include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function validatePassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirmPassword").value;
            let errorMessage = document.getElementById("error-message");

            let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (!regex.test(password)) {
                errorMessage.innerHTML = "Password harus memiliki minimal 8 karakter, termasuk huruf besar, huruf kecil, angka, dan simbol.";
                return false;
            }
            if (password !== confirmPassword) {
                errorMessage.innerHTML = "Konfirmasi password tidak cocok.";
                return false;
            }
            errorMessage.innerHTML = "";
            return true;
        }
    </script>
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 25rem;">
            <h2 class="text-center">Daftar Akun</h2>
            <form action="../includes/register_process.php" method="POST" onsubmit="return validatePassword()">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Konfirmasi Password" required>
                </div>
                <p class="text-danger" id="error-message"></p>
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
                <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </form>
        </div>
    </div>
</body>
</html>
