<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$user_id = $_GET["user_id"];
		$status = $_POST['status'];
		

		$str_sql = "UPDATE users SET email='$email', name='$name', surname='$surname', status='$status' WHERE user_id=$user_id";

		if ($_SESSION['user_id'] == $user_id){
			session_start();
			$_SESSION['user_id'] = $user_id;
			$_SESSION["email"] = $email;
			$_SESSION["name"] = $name;
			$_SESSION["surname"] = $surname;
			$_SESSION['status'] = $status;
		}

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:users_list.php' );
?>
