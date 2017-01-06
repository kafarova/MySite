<?php require('header.php');?>
<?php require_once('connect.php') ?> 
<div id="feedback_list" class="decor_page">
	<?php require_once('connect.php') ?> 
	<h1>Feedback list</h1>
	<?php 
		mysqli_query($con,"SET NAMES 'utf8'"); 
        mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
        mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
		$result = mysqli_query($con,"SELECT id_feedback,title,feedback_text,email FROM feedback INNER JOIN users ON feedback.id_from = users.user_id;");
	?>
	<div class="feedback_table">
	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>FeedbackText</td>
			<td>From</td>
			<td>Oparations</td>
		</tr>
		<?php 
			$count = mysqli_num_rows($result);

            for($i=0; $i<$count; $i=$i+1){
                mysqli_data_seek($result, $i);
                $rown = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
            <tr>
            	<td><?php echo $rown['id_feedback'];?></td>
				<td><?php echo $rown['title'];?></td>
				<td><a href="feedback_question.php?id_feedback=<?php echo $rown["id_feedback"];?>">[open]</a></td>
				<td><?php echo $rown['email'];?></td>
				<td><a href="del_feedback_func.php?id_feedback=<?php echo $rown["id_feedback"];?>">[del]</a></td>
            </tr>
            <?php }?>
	</table>
	</div>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>