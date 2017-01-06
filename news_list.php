<?php require('header.php');?>
<?php require_once('connect.php') ?> 
<div id="news_list" class="decor_page">
	<?php require_once('connect.php') ?> 
	<h1>News list<a href="add_news.php">[ADD]</a></h1>
	<?php 
		mysqli_query($con,"SET NAMES 'utf8'"); 
        mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
        mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
		$result = mysqli_query($con,"SELECT * FROM news");
	?>
	<div class="news_table">
	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Description</td>
			<td>Category</td>
			<td>Operations</td>
		</tr>
		<?php 
			$count = mysqli_num_rows($result);

            for($i=0; $i<$count; $i=$i+1){
                mysqli_data_seek($result, $i);
                $rown = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
            <tr>
            	<td><?php echo $rown['id_news'];?></td>
				<td><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $category;?>"><?php echo $rown['title'];?></a></td>
				<td><?php echo $rown['description'];?></td>
				<td><?php echo $rown['category'];?></td>
				<td><a href="edit_news.php?id_news=<?php echo $rown['id_news'];?>">[edit]</a><a href="del_news_func.php?id_news=<?php echo $rown["id_news"];?>">[del]</a></td>
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