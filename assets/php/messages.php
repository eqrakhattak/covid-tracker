<?php
    session_start();

    if(isset($_SESSION["error"])) {
        $error = $_SESSION["error"];
        // session_unset($_SESSION["error"]);
    } else {
        $error = "";
    }

    echo $error;
?>
