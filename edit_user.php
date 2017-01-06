<?php require('header.php') ?>
  <div id="edit_user" class="decor_page">
       <?php if(! isset($_SESSION["user_id"])) { ?>
       <h2> You are not logged in </h2>
       <?php } else { ?>
       <?php $id = $_GET['user_id']; 
        $result = mysqli_query($con, "SELECT * FROM users WHERE user_id = $id");
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
        <div class="profile_img">
            <img src="" class="usr_photo">
        </div> 
        <div class="profile_info">
            <h3> user info </h3> 
            <form method="post" class="usr_edit_form" action="edit_user_func.php?user_id=<?php echo $id; ?>">
                <ul class="user_info_lab">
                    <li> EMAIL</li>
                    <li> NAME</li>
                    <li> SURNAME</li>
                </ul>
                <ul class="user_info_list">
                    <li> <input type="email" name="email" value="<?php echo $user['email'] ?>"> </li>
                    <li> <input type="text" name="name" value="<?php echo $user['name'] ?>"> </li>
                    <li> <input type="text" name="surname" value="<?php echo $user['surname'] ?>"> </li>
                    <li> <input type="submit" name="submit" value="EDIT"> </li>
                </ul>
            </form>
        </div>
        <?php } ?>
        </div>


<?php require('footer.php') ?>