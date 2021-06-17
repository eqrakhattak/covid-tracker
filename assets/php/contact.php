<?php

	require_once "config.php";
	require_once "session.php";

	if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message=trim($_POST['message']);

        $_SESSION['error'] = '';

        if (empty($error)){
            $insertQuery = $db -> prepare("INSERT INTO contacts (name, email, message) VALUES (?,?,?);");
            $insertQuery -> bind_param("sss", $name, $email, $message);
            $result = $insertQuery -> execute();
                    
            if($result){
                $_SESSION['error'] .= 'Your message has been sent!';
                header("Location: /CovidTracker/contact-us.php");
            }
            else{
                $_SESSION['error'] .= 'Something Went Wrong!';
                header("Location: /CovidTracker/contact-us.php");
            }
            $insertQuery->close();
        }
        mysqli_close($db);
    }

?>