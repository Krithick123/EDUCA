<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      <a href="dash.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="dash.php">Home</a>
         <a href="admin_accounts.php">Admins</a>
         <a href="users_accounts.php">Users</a>
         <a href="teacher.php">Tutors</a>
         <a href="messages.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="update_profile.php" class="btn">Update profile</a>
         <div class="flex-btn">
            <a href="admin_login.php" class="option-btn">login</a>
            <a href="register_admin.php" class="option-btn">register</a>
         </div>
         <a href="../components/mainadmin_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
      </div>

   </section>

</header>