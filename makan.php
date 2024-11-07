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

// Untuk logika cek checkbox
$checklist = $_POST['cek'];
if (is_null($checklist)) {
    echo "<script>alert('Tolong Ceklis semua'); window.location.href='user.php';</script>";
}

// Untuk Logika Makanan, Jumlah, Dan total Harga
$soto = $_POST['soto'];
$rawon = $_POST['rawon'];
$pecel = $_POST['pecel'];
$bakso = $_POST['bakso'];
$teh = $_POST['teh'];
$jeruk = $_POST['jeruk'];
$soto1 = $soto*10000;
$rawon1 = $rawon*10000;
$pecel1 = $pecel*10000;
$bakso1 = $bakso*10000;
$teh1 = $teh*10000;
$jeruk1 = $jeruk*10000;

$hasil = $soto1+$rawon1+$pecel1+$bakso1+$teh1+$jeruk1;
/*$_SESSION['soto'] = $soto;
$_SESSION['rawon'] = $rawon;
$_SESSION['pecel'] = $pecel;
$_SESSION['bakso'] = $bakso;
$_SESSION['teh'] = $teh;
$_SESSION['jeruk'] = $jeruk;*/
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
<form action="checkout.php" method="post">
<div class="container my-5">
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Keranjang Kamu</span>
                <span class="badge bg-primary rounded-pill">v</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Soto</h6>
                        <small class="text-body-secondary"><?php echo $soto?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $soto1;?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Rawon</h6>
                        <small class="text-body-secondary"><?php echo $rawon?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $rawon1?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Pecel</h6>
                        <small class="text-body-secondary"><?php echo $pecel?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $pecel1?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Bakso</h6>
                        <small class="text-body-secondary"><?php echo $bakso?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $bakso1?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Teh</h6>
                        <small class="text-body-secondary"><?php echo $teh?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $teh1?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Jeruk</h6>
                        <small class="text-body-secondary"><?php echo $jeruk?></small>
                    </div>
                    <span class="text-body-secondary">Rp <?php echo $jeruk1?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Rp)</span>
                    <strong>Rp <?php echo $hasil;?></strong>
                </li>
            </ul>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Alamat Pengiriman</h4>
            <form class="needs-validation was-validated" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Atas Nama?</label>
                        <input name="name" type="text" class="form-control" id="firstName" placeholder="Ex: MagmaZ3637" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Negara?</label>
                        <input name="country" type="text" class="form-control" id="lastName" placeholder="Ex: Indonesia" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Location</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="pass" placeholder="Ex: Malang" required="">
                            <div class="invalid-feedback">
                                Your Location is required.
                            </div>
                        </div>
                    </div>

                <hr class="my-4">

                <button class="w-100 btn btn-outline-success btn-lg" type="submit" name="okhe">Cepatkan Bayar</button>
                <a href="user.php"><button class="w-100 btn btn-outline-primary btn-lg" type="button">Back To Choice</button></a>
        </div>
    </div>
</div>
</form>
</body>
</html>
