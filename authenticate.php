<?php
	ob_start();
	$username = $_POST["username"];
	$password = $_POST["password"];
	$loginSuccess = false;
	switch($username) {
		case 'DominikRzecki':
			if($password == '1234'){
				$loginSucess = true;
			}
			break;
		case 'Hashcookie69':
			if($password == '1234'){
				$loginSucess = true;
			}
			break;
		default:
			break;
	}
	if($loginSucess == true) {
		session_start();
		$_SESSION['userName'] = $username;
		header('Location: dashboard.php');
		exit();
	} else {
		header('Location: login.php');
		exit();
	}
?>
