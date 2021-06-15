<?php

	require_once "config.php";
	require_once "session.php";

	if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){

	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password=trim($_POST['password']);
	$confirm_password = trim($_POST['confirm_password']);
	$password_hash =password_hash($password, PASSWORD_BCRYPT);
	$error = '';
	$dbTable = '';
	
	if($_SESSION['Admin'] === true){
		$dbTable = 'users';
	}
	else if($_SESSION['User'] === true){
		$dbTable = 'admins';
	}

	if($query = $db->prepare("SELECT * FROM $dbTable WHERE email = ?")){
		$query -> bind_param('s', $email);
		$query -> execute();
		$query -> store_result();
		if($query ->num_rows >0){
			$error .= 'The email address is already registered.';
		}
		else{
			if (strlen($password)<6 ){
				$error .= 'Password must have atleast 6 characters.';
			}
			if(empty($confirm_password)){
				$error .= 'Please enter confirm password.';
			}
			else{
				if (empty($error)&& ($password != $confirm_password)){
					$error .= 'Password did not match.';
				}
			}
			if (empty($error)){
				$insertQuery =$db -> prepare("INSERT INTO $dbTable (name, email, password) VALUES (?,?,?);")
				$insertQuery -> bind_param("sss", $username, $email, $password_hash);
				$result = $insertQuery -> execute();
				if($result){
					$error .= 'Your registration is successful!';
				}
				else{
					$error .= 'Something Went Wrong!';
				}
			}
		}
	}

	$query->close();
	$insertQuery->close();
	mysqli_close($db);
}

?>