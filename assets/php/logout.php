<?php

    session_start();

    //destroy session
    if(session_destroy()){
        //redirect to the index page
        header('Location: /CovidTracker/index.php');
        exit;
    }

?>