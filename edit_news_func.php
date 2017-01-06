<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$text = $_POST['text'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$img_url = $_POST['img_url'];
		$id_news = $_GET['id_news'];

		$str_sql = "UPDATE news SET title='$title', description='$description', category='$category', text = '$text', date = '$date', img_url = '$img_url' WHERE id_news = '$id_news';";

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:index.php' );
?>
