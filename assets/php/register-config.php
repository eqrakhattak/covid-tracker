<?php

	require_once "config.php";
	require_once "session.php";

	if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){

	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password=trim($_POST['password']);
	$confirm_password = trim($_POST['confirm-password']);
	$password_hash = md5($password);

	$_SESSION['error'] = '';
	$dbTable = '';
    
	if(!empty($_POST['isadmin'])){
        $dbTable = "admins";
    }
	else{
		$dbTable = "users";
	}

	if($query = $db->prepare("SELECT * FROM $dbTable WHERE email = ?")){
		$query -> bind_param('s', $email);
		$query -> execute();
		$query -> store_result();

		if($query ->num_rows >0){
			$_SESSION['error'] .= 'The email address is already registered.';
			header("Location: /CovidTracker/register.php");
		}
		else{
			if (strlen($password)<6 ){
				$_SESSION['error'] .= 'Password must have atleast 6 characters.';
				header("Location: /CovidTracker/register.php");
			}
			if(empty($confirm_password)){
				$_SESSION['error'] .= 'Please enter confirm password.';
				header("Location: /CovidTracker/register.php");
			}
			else{
				if (empty($error) && ($password != $confirm_password)){
					$_SESSION['error'] .= 'Password did not match.';
					header("Location: /CovidTracker/register.php");
				}
			}
			if (empty($error)){
				$insertQuery = $db -> prepare("INSERT INTO $dbTable (username, email, password) VALUES (?,?,?);");
				$insertQuery -> bind_param("sss", $username, $email, $password_hash);
				$result = $insertQuery -> execute();
				
				if($result){
					$_SESSION['error'] .= 'Your registration is successful!';
					header("Location: /CovidTracker/login.php");
				}
				else{
					$_SESSION['error'] .= 'Something Went Wrong!';
					header("Location: /CovidTracker/register.php");
				}
				$insertQuery->close();
			}
		}
		$query->close();
	}
	mysqli_close($db);
}

?>