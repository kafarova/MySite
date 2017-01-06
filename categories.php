<?php $category = $_GET['category']; ?>
<div class="categories">
		<h1>Categories</h1>
		<ul>
		<?php 
			if ($category == "politics"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "politics"; ?>">Politics</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "politics"; ?>">Politics</a></li>
		<?php }?>
		<?php 
			if ($category == "education"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "education"; ?>">Education</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "education"; ?>">Education</a></li>
		<?php }?>
		<?php 
			if ($category == "sports"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "sports"; ?>">Sports</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "sports"; ?>">Sports</a></li>
		<?php }?>
		<?php 
			if ($category == "science"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "science"; ?>">Science</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "science"; ?>">Science</a></li>
		<?php }?>
		</ul>
</div>