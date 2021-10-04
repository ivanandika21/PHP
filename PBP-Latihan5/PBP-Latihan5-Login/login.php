<?php
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if ($user == "ivan" && $pass == "123"){
        echo "<h2>Halo ".$user.", login berhasil.</h2>";
    } else {
        echo "<script>alert('Username atau password salah!'); window.location = 'index.php'</script>";
        // header("Location: index.php");
        // exit;
    }
?>