<?php
session_start();


if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == "user") {
        header("location: user.php");
        exit();
    } else if ($_SESSION['user'] == "admin") {
        header("location: dashboard.php");
        exit();
    } else if ($_SESSION['user'] == "MagmaZ3637") {
        header("location: loop.php");
    } else {
        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets\logo.ico" alt="" width="72" height="65">
        <h1 class="display-5 fw-bold text-body-emphasis">Login System Sederhana</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Disini memiliki system grade yang digerakkan js, login digerakkan oleh php session, menu makan, dan looping. Web Ini Dibuat Oleh MagmaZ3637 | Zidan Alfa Permana</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="login.php"><button type="button" class="btn btn-outline-primary btn-lg px-4">Login Min</button></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <footer class="py-1 my-1">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="http://github.com/MagmaZ3637" class="nav-link px-2"><i class="fa fa-github"></i></a></li>
            <li class="nav-item"><a href="http://youtube.com/@MagmaZ37" class="nav-link px-2"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
        <p class="text-center text-body-secondary">MagmaZ3637 - Zidan Alfa Permana</p>
    </footer>
</div>
</body>
</html>