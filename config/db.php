<?php
/*
    File ini ada di
    /config/db.php
*/
$host = "localhost";
$user = "root";
$pass = "";
$db = "mywebsite_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
