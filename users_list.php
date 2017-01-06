<?php require('header.php');?>
<div id="users_list" class="decor_page">
	<?php require_once('connect.php') ?> 
	<h1>Registered users</h1>
	<?php 
		$result = mysqli_query($con,"SELECT * FROM users");
	?>
	<div class="users_table">
	<table>
		<tr>
			<td>ID</td>
			<td>Login</td>
			<td>Name</td>
			<td>Surname</td>
			<td>Email</td>
			<td>Status</td>
			<td>Oparations</td>
		</tr>
		<?php 
			$count = mysqli_num_rows($result);

            for($i=0; $i<$count; $i=$i+1){
                mysqli_data_seek($result, $i);
                $rown = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
            <tr>
            	<td><?php echo $rown['user_id'];?></td>
				<td><a href="user_profile.php?user_id=<?php echo $rown['user_id'];?>"><?php echo $rown['login'];?></a></td>
				<td><?php echo $rown['name'];?></td>
				<td><?php echo $rown['surname'];?></td>
				<td><a href="user_profile.php?user_id=<?php echo $rown['user_id'];?>"><?php echo $rown['email'];?></a></td>
				<td ><?php if ($rown['status']==0) echo "[USER]";
				else echo "[ADMIN]";?></td>
				<td><a href="edit_user_admin.php?user_id=<?php echo $rown['user_id'];?>">[edit]</a><a href="del_user_func.php?user_id=<?php echo $rown["user_id"];?>">[del]</a></td>
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