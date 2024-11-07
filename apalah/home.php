<?php
// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: grade.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ganti dengan validasi yang sesuai
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi sederhana
    if ($username === 'MagmaZ3637' && $password === 'admin') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}