<?php
    session_start();
    unset($_SESSION["pilih"]);
    header("Location: page_rmk.php");
?>