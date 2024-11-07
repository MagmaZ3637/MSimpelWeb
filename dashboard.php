<?php

session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == "user") {
        header("location: user.php");
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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container my-5">
    <script src="core.js"></script>
    <div class="my-3">
        <h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
    </div>
    <form method="post" action="">
        <label>Masukkan grade</label>
        <input type="number" id="math" min="0" max="100">
        <div class="my-3">
        <button onclick="grade()" class="btn btn-outline-warning">Kirim</button>
        </div>
    </form>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Logout
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin Ingin Keluar Sekarang? Semua Progress kamu akan hilang
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="logout.php"><button type="button" class="btn btn-primary">Ya</button></a>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 15%;">
        <footer class="py-1 my-1">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="http://github.com/MagmaZ3637" class="nav-link px-2"><i class="fa fa-github"></i></a></li>
                <li class="nav-item"><a href="http://youtube.com/@MagmaZ37" class="nav-link px-2"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
            <p class="text-center text-body-secondary">MagmaZ3637 - Zidan Alfa Permana | </p>
        </footer>
    </div>
</div>
</body>
</html>