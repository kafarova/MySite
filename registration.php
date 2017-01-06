<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$login = $_POST['login'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirmpass'];
		if($password != $confirm_password){
			echo "<script>alert('Несовпадение паролей!');</script>";
			echo '<script>location.replace("index.php");</script>';
			exit;
		}
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$password = md5($password);

		
		
		$str_sql = "INSERT INTO users (email, login, password, name, surname,status)VALUES('$email', '$login','$password', '$name', '$surname',0);";

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:index.php' );
?>
