<?php

session_start();


// Cek apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == "admin") {
        header("location: dashboard.php");
        exit();
    } else if ($_SESSION['user'] == "MagmaZ3637") {
        header("location: loop.php");
    }
}

if (!isset($_SESSION['hooh'])){
    header("location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="">
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.pngall.com/wp-content/uploads/5/Checklist-Logo.png" alt="" width="72" height="70">
        <h1 class="display-5 fw-bold text-body-emphasis">Pesanan Berhasil Dibuat</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Oke pesanan kamu dikirim di sistem kami. Pesanan kamu akan diantarkan</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="user.php"><button type="button" class="btn btn-outline-primary btn-lg px-4">OK</button></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>