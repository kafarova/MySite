<?php 
	session_start(); 
	require('connect.php');
	
	$id_feedback = $_GET['id_feedback'];

	$result = mysqli_query($con, "DELETE FROM feedback WHERE id_feedback = $id_feedback"); 

	header('Location:feedback_list.php');
?>