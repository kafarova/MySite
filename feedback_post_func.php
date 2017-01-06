<?php 
	require_once("connect.php");
	session_start();
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$text = $_POST['feedback_text'];
		$user_id = $_SESSION['user_id'];
		
		$str_sql = "INSERT INTO feedback (title, feedback_text, id_from) VALUES ('$title', '$text', '$user_id')";

		mysqli_query($con, $str_sql) or die(mysqli_error());

		header( 'Location:index.php' );
		echo "<script>alert('Вопрос удачно отправлен!');</script>";
	} else {
		header( 'Location:index.php' );
		echo "<script>alert('Вопрос не отправлен!');</script>";
	}
	
	//header( 'Location:index.php' );
?>
