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
<div class="container-fluid">
    <div class="my-5">
        <h2 class="text-center">Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
    </div>
    <form action="makan.php" method="post">
        <section class="h-100">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0">Makan Lah</h3>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Soto">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Soto</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="soto" value="0" type="number"
                                               class="form-control form-control-sm" />

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="csoto">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Rawon">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Rawon</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="rawon" value="0" type="number"
                                               class="form-control form-control-sm" />

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="crawon">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Pecel">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Pecel</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="pecel" value="0" type="number"
                                               class="form-control form-control-sm" />

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cpecel">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Bakso">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Bakso</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        

                                        <input id="form1" min="0" name="bakso" value="0" type="number"
                                               class="form-control form-control-sm" />

                                        
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cbakso">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Teh">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Teh</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">


                                        <input id="form1" min="0" name="teh" value="0" type="number"
                                               class="form-control form-control-sm" />


                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cteh">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                class="img-fluid rounded-3" alt="Jeruk">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Jeruk</p>
                                        <p><span class="text-muted">Lorem ipsum dolor sit amet.</span></p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">


                                        <input id="form1" min="0" name="jeruk" value="0" type="number"
                                               class="form-control form-control-sm" />


                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp10.000/P</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <input type="checkbox" name="cjeruk">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body text-center">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-success btn-block btn-lg">Cepatkan Bayar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>
    <a class="text-center"><button type="button" class="btn btn-outline-primary my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Logout
    </button></a>

    <div style="margin-top: 15%;">
        <footer class="py-1 my-1">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="http://github.com/MagmaZ3637" class="nav-link px-2"><i class="fa fa-github"></i></a></li>
                <li class="nav-item"><a href="http://youtube.com/@MagmaZ37" class="nav-link px-2"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
            <p class="text-center text-body-secondary">MagmaZ3637 - Zidan Alfa Permana | </p>
        </footer>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sudah selesai milihnya? Berikut ini pesananmu:<br>
                    <?php
                    if (isset($_POST['makanan1'])) {
                        foreach ($_POST['makanan1'] as $index => $value) {
                            echo "Makanan " . ($index + 1) . ": " . htmlspecialchars($value) . "<br>";
                        }
                    } else {
                        echo "Tidak ada pesanan.";
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="makan.php"><button type="button" class="btn btn-primary">Ya</button></a>
                </div>
            </div>
        </div>
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
</div>
</body>
