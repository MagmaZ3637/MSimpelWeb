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
if (isset($_POST['hooh'])) {
    $nama = $_POST['user'];
    $password = $_POST['pass'];
    $_SESSION['user'] = $nama;
    $_SESSION['pass'] = $password;
    $_SESSION['hooh']=true;
    if ($nama == "admin" && $password == "admin") {
        header("Location: dashboard.php");
    } else if ($nama == "user" && $password == "user") {
        header("Location: user.php");
    } else if ($nama == "MagmaZ3637" && $password == "magmaz3637") {
        header("location: loop.php");
    }
}


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body style="background-color: #bdbdbd">

<!-- Form -->
<div class="col-md-10 mx-auto col-lg-5 my-5">
    <form class="shadow-lg p-4 p-md-5 border rounded-3 bg-body-tertiary border border-primary" action="" method="post">
        <div class="mt-2 mb-5 text-center">
            <h1 style="font-family: 'Futura Md BT'; color: #0197aa">LOGIN PAGE</h1>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="yourname" name="user">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" name="hooh" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</button>
        <div class="d-grid gap-2 d-md-block my-3 text-center">
            <a href="index.php"><button class="btn btn-outline-danger justify-content-center" type="button">Kembali</button></a>
            <a href="eror.php"><button class="btn btn-outline-success justify-content-center" type="button">Bikin Akun</button></a>
        </div>
        <hr class="my-4">
        <div class="text-center">
        <small class="text-body-secondary text-center"><strong> Zidan Alfa Permana </strong>X <strong>MagmaZ3637</strong>.</small>
        </div>
    </form>
</div>
<!-- Form -->
<!-- Custom Cursor Elements -->


<script src="script.js"></script>
</body>
</html>