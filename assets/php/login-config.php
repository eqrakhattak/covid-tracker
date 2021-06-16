<?php

	require_once "config.php";
	require_once "session.php";

	// $choice = $_GET['q'];
	
	
	// if(isset($_SESSION['Admin'])){
	// 	$dbTable = 'admins';
	// }
	// if(isset($_SESSION['User'])){
	// 	$dbTable = 'users';
	// }

	// echo $dbTable;

	// function debug_to_console($data) {
	// 	$output = $data;
	// 	if (is_array($output))
	// 		$output = implode(',', $output);
	
	// 	echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	// }
	// debug_to_console("Saad")


	if($_SERVER["REQUEST_METHOD"] =="POST" && isset($_POST['submit'])){
		
		$email = trim($_POST['email']);
		$password=trim($_POST['password']);
		$password = md5($password);

		$_SESSION['error'] = '';
		$dbTable = '';

		if(!empty($_POST['isadmin'])){
			$dbTable = "admins";
		}
		else{
			$dbTable = "users";
		}

		//validate if email is empty
		if(empty($email)){
			$_SESSION['error'] .= 'Please enter email.';
			header("Location: /CovidTracker/login.php");
		}

		//validate if password is empty
		if(empty($password)){
			$_SESSION['error'] .= ' Please enter password.';
			header("Location: /CovidTracker/login.php");
		}



		if (empty($_SESSION['error'])){

			$emquery = "SELECT * FROM $dbTable WHERE email='$email'";
			$psquery = "SELECT * FROM $dbTable WHERE password='$password'";
			$emres = mysqli_query($db, $emquery);
			$psres = mysqli_query($db, $psquery);

			if (mysqli_num_rows($emres) < 1){
				$_SESSION['error'] .= ' Please enter correct email.';
				header("Location: /CovidTracker/login.php");
			}
			else if (mysqli_num_rows($psres) < 1){
				$_SESSION['error'] .= ' Please enter correct password';
				header("Location: /CovidTracker/login.php");
			}
			else{
				$query = "SELECT * FROM $dbTable WHERE email='$email' AND password='$password'";
				$res = mysqli_query($db, $query);
				$row = mysqli_fetch_array($res);
				
				// $query = $db -> prepare("SELECT * FROM users WHERE email =?")){
				// $query->bind_param('s', $email);
				// $query->execute();
				// $row = $query->fetch();
				
				if(mysqli_num_rows($res)==1){
						$_SESSION["userid"] = $row['id'];
						$_SESSION["username"] = $row['username'];

						//redirect to index pages
						if($dbTable=="admins"){
							header("location: /CovidTracker/admin-panel.php");
						}else if($dbTable=="users"){
							header("location: /CovidTracker/index.php");
						}
						
						exit;
					// }
				}
				else{
						$_SESSION['error'] .= 'The password or email  is not valid.';
						header("Location: /CovidTracker/login.php");	
				}
			
				
				// else{
				// 	$_SESSION['error'] .= 'No user exist with that email.';
				// 	header("Location: /CovidTracker/login.php");
				// }
				$query->close();
			}
		
		}
		//close connection
		mysqli_close($db);
	}

?>