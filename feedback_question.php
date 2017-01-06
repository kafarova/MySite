<?php require('header.php');?>
<?php require_once('connect.php') ?> 
<div id="feedback_question" class="decor_page">
	<?php require_once('connect.php') ?> 
	<?php 
		$id_feedback = $_GET['id_feedback'];

		$result = mysqli_query($con,"SELECT id_feedback,title,feedback_text,email FROM feedback INNER JOIN users ON feedback.id_from = users.user_id WHERE id_feedback='$id_feedback';");
		$feedback = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
	<h1>Feedback ID:<?php echo $id_feedback;?></h1>
	
	<div>
		<p><b>From:</b> <?php echo $feedback['email'];?></p>
		<p><b>Title:</b> <?php echo $feedback['title'];?></p>
		<p><b>Text:</b> <?php echo $feedback['feedback_text'];?></p>
	</div>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>