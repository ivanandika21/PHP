<?php
    include("../model/db.php");

    $dtku = new mydb();
    $masuk = $dtku->input_data($_POST["fns"], $_POST["fnm"]);

    if($masuk == true){
        echo "Data berhasil di insert<br>";
        echo "<a href='../view/insertsiswa.php'>Input Ulang</a>";
    } else {
        echo "Data gagal di insert<br>";
        echo "<a href='../view/insertsiswa.php'>Input Ulang</a>";
    }
?>