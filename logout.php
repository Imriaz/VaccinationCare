<?php
    session_start();
    unset($_SESSION["Guardian_Phone"]);
    unset($_SESSION["Guardian_Email"]);
    header("Location:login.php");
?>