<?php require('header.php');?>
<div id="profile" class="decor_page">
	<?php 
        $user_id = $_GET["user_id"];
        $result = mysqli_query($con, "SELECT * FROM users WHERE user_id = $user_id");
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>

        <div class="profile_img">
            <img src="" class="usr_photo">
        </div> 
        <div class="profile_info">
            <h3> User Info </h3> 
            	<ul class="user_info_lab">
                    <li> EMAIL</li>
                    <li> NAME</li>
                    <li> SURNAME</li>
                    <li> STATUS</li>
                </ul>
                <ul class="user_info_list">
                    <li> <?php echo $user["email"]; ?> </li>
                    <li> <?php echo $user["name"]; ?> </li>
                    <li> <?php echo $user["surname"]; ?></li>
                    <?php if($user["status"] == 1){?>
                        <li>[ADMIN]</li>
                    <?php } else {?>
                        <li>[USER]</li>
                    <?php }?>
                </ul>
               </a>
        </div>

</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>