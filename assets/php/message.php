<?php

    require_once "config.php";
	require_once "session.php";
    
    if(isset($_SESSION["errormsg"])) {
        $error = $_SESSION["errormsg"];
        session_unset($_SESSION["errormsg"]);
    } else {
        $error = "";
    }

    echo $error;
?>
