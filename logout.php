<?php 
    session_start();
    $_SESSION["tw_id"] = "";
    session_destroy();
    header("location: http://localhost/TW_Proiect", true);
    exit();
?>