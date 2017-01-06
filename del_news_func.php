<?php 
	session_start(); 
	require('connect.php');
	
	$id_news = $_GET['id_news'];

	$result = mysqli_query($con, "DELETE FROM news WHERE id_news = $id_news"); 

	header('Location:news_list.php');
?>