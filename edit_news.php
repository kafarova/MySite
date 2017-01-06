<?php require('header.php');?>
<div id="edit_news" class="decor_page">
	<?php if(! isset($_SESSION["user_id"])) { ?>
       <h2> You are not logged in </h2>
       <?php }?>
       	<h2>Edit news</h2>
       <?php $id_news = $_GET['id_news']; 

        mysqli_query($con,"SET NAMES 'utf8'"); 
        mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
        mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
        $result = mysqli_query($con, "SELECT * FROM news WHERE id_news = $id_news");
        $news = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>
	<div class="edit_news_div">
		<form method="post" class="edit_news_form" action="edit_news_func.php?id_news=<?php echo $news['id_news'];?>">
                <ul class="edit_news_list">
                    <li> <p>Title</p>
                    <input type="text" name="title" value="<?php echo $news['title'];?>"> </li> 
                    <li> <p>Description</p>
                    <textarea name="description"><?php echo $news['description'];?></textarea></li>
                    <li> <p>Category</p>
                    <select name="category">
                    	<?php if ($news['category'] == "politics"){?>
                    		<option selected value="politics">Politics</option>
                    	<?php } else {?>
                    		<option value="politics">Politics</option>
                    	<?php }?>
                    	<?php if ($news['category'] == "education"){?>
                    		<option selected value="education">Education</option>
                    	<?php }else {?>
                    		<option value="education">Education</option>
                    	<?php }?>
                    	<?php if ($news['category'] == "sports"){?>
                    		<option selected value="sports">Sports</option>
                    	<?php }else {?>
                    		<option value="sports">Sports</option>
                    	<?php }?>
                        <?php if ($news['category'] == "science"){?>
                            <option selected value="science">Science</option>
                        <?php }else {?>
                            <option value="science">Science</option>
                        <?php }?>
                    	</select> 
                    </li>
                    <li> <p>Text</p>
                    <textarea name="text"><?php echo $news['text'];?></textarea> </li>
                    <li> <p>Date</p>
                    <input type="date" name="date" value="<?php echo $news['date'] ?>"> </li>
                    <li> <p>Image Url</p>
                    <input type="text" name="img_url" value="<?php echo $news['img_url'] ?>"> </li>
                    <li> <input type="submit" name="submit" value="EDIT"> </li>
                </ul>
		</form>
	</div>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>