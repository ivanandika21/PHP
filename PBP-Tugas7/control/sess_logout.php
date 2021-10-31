<?php
    session_start();
    session_destroy();
    header("Location: ../view/page_login.php");
?>