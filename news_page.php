<?php require('header.php');?>
<div id="news_page" class="decor_page">
	<?php require('categories.php');?>
	<!--<div class="categories">
		<h1>Categories</h1>
		<ul>
			<li class="cat_here"><a href="">Latest news</a></li>
			<li><a href="">Tournaments</a></li>
			<li><a href="">Transfers</a></li>
			<li><a href="">Interviews</a></li>
		</ul>
	</div>-->
	<div class="n_page">
		<?php require('connect.php');
			$id_news = $_GET['id_news']; 
			mysqli_query($con,"SET NAMES 'utf8'"); 
			mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
			mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");

			$result = mysqli_query($con, "SELECT * FROM news WHERE id_news = $id_news");
			$news = mysqli_fetch_array($result, MYSQLI_ASSOC);
		?>
		<h2><?php echo $news['title'];?></h2>
		<img src=<?php echo $news['img_url'];?> width="650">
		<p><?php echo $news['text'];?></p>
		<p class="news_date"><?php echo $news['date'];?></p>

		<!--<h2>SPORT: Месси принял решение остаться в клубе </h2>
		<img src="https://pp.vk.me/c626520/v626520956/3c83f/QhJZbIArW_4.jpg" width="650px">
		<p>
			Ранее возникали сложности по ходу переговоров о новом контракте аргентинца, который хотел значительного увеличения зарплаты, а также имел предложение из Китая. Однако сам Месси намерен остаться все же в "Барселоне".

			Договор будет продлен в самом начале 2017 года после небольшой паузы в играх чемпионата Испании.
			https://pp.vk.me/c626520/v626520956/3c83f/QhJZbIArW_4.jpg
		</p>
		<p class="news_date">21.12.2016</p>-->
	</div>
	<div class="float_clear">
</div>
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>