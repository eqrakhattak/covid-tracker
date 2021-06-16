<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    if(!isset($_POST['category'])) {
        $error .= "<li>You forgot to select your Category!</li>";
    }

    if(isset($_POST['submit'])){//to run PHP script on submit
        if(!empty($_POST['checkbox'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['checkbox'] as $selected){
                echo $selected."</br>";
            }
        }
    }
}

?>