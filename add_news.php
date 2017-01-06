<?php require('header.php');?>
<div id="edit_news" class="decor_page">
	<?php if(! isset($_SESSION["user_id"])) { ?>
       <h2> You are not logged in </h2>
       <?php } else {?>
       	<h2>Add news</h2>

	<div class="edit_news_div">
		<form method="post" class="edit_news_form" action="add_news_func.php">
                <ul class="edit_news_list">
                    <li> <p>Title</p>
                    <input type="text" name="title" value=""> </li>
                    <li> <p>Description</p>
                    <textarea name="description"></textarea></li>
                    <li> <p>Category</p>
                    <select name="category">
                    		<option value="politics">Politics</option>
                    		<option value="education">Education</option>
                    		<option value="sports">Sports</option>
                            <option value="science">Science</option>
                    	</select> 
                    </li>
                    <li> <p>Text</p>
                    <textarea name="text"></textarea> </li>
                    <li> <p>Date</p>
                    <input type="date" name="date" value=""> </li>
                    <li> <p>Image Url</p>
                    <input type="text" name="img_url" value=""> </li>
                    <li> <input type="submit" name="submit" value="ADD"> </li>
                </ul>
		</form>
	</div>
    <?php }?>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>