<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$user_id = $_GET["user_id"];
		
		$str_sql = "UPDATE users SET email='$email', name='$name', surname='$surname' WHERE user_id=$user_id";

		session_start();
		$_SESSION["email"] = $email;
		$_SESSION["name"] = $name;
		$_SESSION["surname"] = $surname;

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:profile.php' );
?>
