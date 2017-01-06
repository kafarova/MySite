<?php
	session_start();
	require_once('connect.php');

	if(isset($_POST['submit'])) {
		$email = $_POST['email']; 
		$password = $_POST['password'];
		$password = md5($password);

		$result = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
		$user = mysqli_fetch_array($result, MYSQLI_ASSOC); 

		$_SESSION["email"] = $user['email'];
		$_SESSION["name"] = $user['name'];
		$_SESSION["surname"] = $user['surname'];
		$_SESSION["user_id"] = $user['user_id'];
		$_SESSION["status"] = $user['status'];
		$_SESSION["is_logged"] = 1;

		if(isset($_SESSION["user_id"])) {
			header("Location:profile.php");
		} else {
			echo "<script>alert('Неправильный логин или пароль!');</script>";
			echo '<script>location.replace("index.php");</script>'; 
			exit;
			//header('Location:index.php');
		}
	}else{
		header("Location:index.php");
	}
	
?>