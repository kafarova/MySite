<?php require('header.php');?>
<div id="admin_pan" class="decor_page">
	<h1>Admin Panel</h1>
	<?php if(isset($_SESSION['user_id']) and $_SESSION["status"]==1){?>
	<div class="admin_operations">
		<ul>
			<li><a href="users_list.php">Users</a></li>
			<li><a href="news_list.php">News</a></li>
			<li><a href="feedback_list.php">Feedback</a></li>
		</ul>
	</div>
	<?php } else {?>
	<h2>You are not admin. You haven't rights to administrate this site!</h2>
	<?php }?>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>