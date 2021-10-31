<?php
    include '../model/kelasKst.php';

    session_start();
    
    $kst = new Kst();
    $_SESSION["sesspilih"] = $kst->getDetail($_GET["pilih"]);
    header("Location: ../view/page_pilih.php");
?>