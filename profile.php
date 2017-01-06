<?php require('header.php');?>
<div id="profile" class="decor_page">
	<?php if(! isset($_SESSION["user_id"])) { ?>
       <h2> You are not logged in </h2>
       <?php } else { ?> 
        <div class="profile_img">
            <img src="" class="usr_photo">
        </div> 
        <div class="profile_info">
            <h3> User Info <a href="edit_user.php?user_id=<?php echo $_SESSION["user_id"]; ?>"> [edit] </a> </h3> 
            	<ul class="user_info_lab">
                    <li> EMAIL</li>
                    <li> NAME</li>
                    <li> SURNAME</li>
                    <li> STATUS</li>
                </ul>
                <ul class="user_info_list">
                    <li> <?php echo $_SESSION["email"]; ?> </li>
                    <li> <?php echo $_SESSION["name"]; ?> </li>
                    <li> <?php echo $_SESSION["surname"]; ?></li>
                    <?php if($_SESSION["status"] == 1){?>
                        <li>[ADMIN]</li>
                    <?php } else {?>
                        <li>[USER]</li>
                    <?php }?>
                </ul>
               </a>
        </div>
    <?php } ?>
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>