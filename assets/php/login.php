<?php

	require_once "config.php";
	require_once "session.php";
	require_once "choice.php";
	$_SESSION[$error] ='';
	$dbTable = '';

	if($_SESSION['Admin'] === true){
		$dbTable = 'users';
	}
	else if($_SESSION['User'] === true){
		$dbTable = 'admins';
	}

	if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$password=trim($_POST['password']);

		//validate if email is empty
		if(empty($email)){
			$error .= 'Please enter email.';
		}

		//validate if password is empty
		if(empty($password)){
			$error .= ' Please enter password.';
		}

		if (empty($error)){
			if($query = $db -> prepare("SELECT * FROM $dbTable WHERE email =?")){
				$query->bind_param('s', $email);
				$query->execute();
				$row = $query->fetch();
				
				if($row){
					if (password_verify($password, $row['password'])){
						$_SESSION["userid"] = $row['id'];
						$_SESSION["user"] = $row;

						//redirect to index page
						header("location: /index.php");
						exit;
					}
					else{
						$error .= 'The password is not valid';	
					}
				}
				else{
					$error .= 'No user exist with that email.';
				}
			}
			
			$query->close();
		}
		//close connection
		mysqli_close($db);
	}

?>