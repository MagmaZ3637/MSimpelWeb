<?php

session_start();


// Cek apakah pengguna sudah login
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == "admin") {
        header("location: dashboard.php");
        exit();
    } elseif ($_SESSION['user'] == "user") {
        header("location: user.php");
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
<div class="container my-5">
    <h2 class="text-center">Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
    <div class="row">
        <!-- Form Kiri -->
        <div class="col-md-5 mx-5 my-3">
            <h2 class="text-center">Input</h2>
            <form class="shadow-sm p-4 p-md-5 border rounded-3 bg-body-tertiary border border-primary" action="" method="post">
                <div class="mt-2 mb-5 text-center">
                    <h5 style="font-family: 'Arial Nova Cond Light'; color: #026e7c">Masukkan String/Kata Apapun Yang Akan Di Looping (ini opsional ya)</h5>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama saya ..." name="bebas">
                    <label for="floatingInput">Apapun (Optional)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="10" name="loop" min="1" value="1" required>
                    <label for="floatingInput">Jumlah yang ingin di looping/ulang</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-success" name="submet">OK</button>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logout
                    </button>
                </div>
            </form>
        </div>
        <!-- Form Kanan -->
        <div class="col-md-5 mx-3 my-3">
            <h2 class="text-center">Output</h2>
            <div class="shadow-sm p-4 p-md-5 border rounded-3 bg-body-tertiary border border-primary">
                <?php if (isset($_POST['submet'])){
                    // jumlah loopingan
                    // jumlah looping
                    $inputlah = $_POST['bebas'];
                    $jloop = $_POST['loop']; // Mengambil nilai loop di luar kondisi

                    if (empty($inputlah)) {
                        // Jika inputlah kosong
                        for ($i = 1; $i <= $jloop; $i++) {
                            echo "Angka: " . $i . "<br>";
                        }
                    } else {
                        // Jika inputlah tidak kosong
                        for ($i = 1; $i <= $jloop; $i++) {
                            echo $inputlah . "<br>";
                        }
                    }
                }
                ?>
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
</body>
</html>
