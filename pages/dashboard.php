<?php
/*
    File ini ada di
    /pages/dashboard.php
*/
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <?php echo $_SESSION["user"]; ?>!</h1>
        <a href="../includes/logout.php" class="btn-logout">Logout</a>
    </div>
</body>
</html>
