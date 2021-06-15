<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'covid_tracker';    
    
    /*connect to MySQL database */
    $db = mysqli_connect($servername, $username, $password, $dbname);

    //check db connection
    if($db === false){
        die('Error: connection failure. ' . mysqli_connect_error());
    }
?>