<?php
// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simpan username dan password yang valid (sesuaikan dengan data Anda)
    $valid_username = "admin";
    $valid_password = "password123";

    // Periksa apakah username dan password sesuai
    if ($username === $valid_username && $password === $valid_password) {
        // Login berhasil, arahkan ke halaman selamat datang atau berikan akses ke halaman tertentu
        header("Location: welcome.php");
        exit();
    } else {
        // Login gagal, arahkan kembali ke form login dengan pesan error
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
}
?>