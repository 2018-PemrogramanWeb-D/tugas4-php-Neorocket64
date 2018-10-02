<?php
    session_start();
    $_SESSION['loginerror'] = -1;
    header("Location: welcome.php");
?>