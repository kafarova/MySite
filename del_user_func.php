<?php 
	session_start(); 
	require('connect.php');
	
	$user_id = $_GET['user_id'];

	if ($user_id == $_SESSION["user_id"]) {
		echo "You cant delete yourself";
	} else {
		$result = mysqli_query($con, "DELETE FROM users WHERE user_id = $user_id"); 
	}
	header('Location:users_list.php');
?>