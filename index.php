<?php require('header.php');?>
<?php require('slider.php');?>
<div id="main">
    <div id="content">
        <div class="bar"><a href="news.php?category=<?php echo "latest_news"; ?>">Latest news</a></div>
        <div class="news_left">
        <?php require('connect.php');?>
            <?php
            mysqli_query($con,"SET NAMES 'utf8'"); 
            mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
            mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");

            $lastnews = mysqli_query($con,"SELECT id_news, title, category, description, text, date, img_url FROM news ORDER BY date DESC LIMIT 12");
        
            $count = mysqli_num_rows($lastnews);

            for($i=0; $i<$count; $i=$i+3){
                mysqli_data_seek($lastnews, $i);
                $rown = mysqli_fetch_array($lastnews, MYSQLI_ASSOC);?>

            <div class="latest_news_div">
                <h2><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $rown['category']?>"><?php echo $rown['title'];?></a></h2>
                <p><?php echo $rown['description'];?></p>
                <p class="news_date"><?php echo $rown['date'];?></p>
            </div>            
        <?php } ?>
        </div>
        <div class="news_middle">
        <?php require_once('connect.php');
            for ($i=1; $i<$count ; $i=$i+3) {
                mysqli_data_seek($lastnews, $i);
                $rown = mysqli_fetch_array($lastnews,MYSQLI_ASSOC);?>
            
            <div class="latest_news_div">
                    <h2><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $rown['category'];?>"><?php echo $rown['title'];?></a></h2>
                    <p><?php echo $rown['description'];?></p>
                    <p class="news_date"><?php echo $rown['date'];?></p>
            </div>
        <?php }?>
        </div>
        <div class="news_right">
        <?php require_once('connect.php');
            for ($i=2; $i<$count ; $i=$i+3) {
                mysqli_data_seek($lastnews, $i);
                $rown = mysqli_fetch_array($lastnews,MYSQLI_ASSOC);?>
            
            <div class="latest_news_div">
                    <h2><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $rown['category'];?>"><?php echo $rown['title'];?></a></h2>
                    <p><?php echo $rown['description'];?></p>
                    <p class="news_date"><?php echo $rown['date'];?></p>
            </div>
        <?php }?>
        </div>
    </div>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>