<?php 
	require_once("connect.php");
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$text = $_POST['text'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$img_url = $_POST['img_url'];
		

		$str_sql = "INSERT INTO news(title,description,category,text,date,img_url) VALUES ('$title','$description','$category','$text','$date','$img_url');";

		mysqli_query($con, $str_sql) or die(mysqli_error());
	}

	header( 'Location:index.php' );
?>
