<?php
    include("../model/db.php");

    $dtku = new mydb();
    $delet = $dtku->update_data($_GET["id_upd"], $_POST["fns"], $_POST["fnm"]);

    if($delet == true){
        echo "Data berhasil di update<br>";
        echo "<a href='../view/page_index.php'>Kembali</a>";
    } else {
        echo "Data gagal di update<br>";
        echo "<a href='../view/page_index.php'>Kembali</a>";
    }
?>