<?php
    session_start();
    if (!isset($_SESSION["sun"])){
        header("Location: index.php");
    }

    $nama = $_SESSION["sun"];
    $pass = $_SESSION["sps"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transkrip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat datang <?= $nama ?> di halaman Transkrip</h1><br>
    <a class="btn" href='logout.php'>Logout</a>
</body>
</html>