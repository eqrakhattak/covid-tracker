<?php

    session_start();

    //if user is already logged in then redirect user to welcome page
    if(isset($_SESSION['userid']) && $_SESSION['userid'] === true){
        header('location: index.html');
        exit;
    }
?>