<?php

include '../components/conn.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_users = $conn->prepare("DELETE FROM `tutors` WHERE id = ?");
   $delete_users->execute([$delete_id]);
   

   header('location:teacher.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users accounts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/mainadmin.css">

</head>
<body>

<?php include '../components/mainadmin_head.php' ?>

<!-- user accounts section starts  -->

<section class="accounts">

   <h1 class="heading">Tutor account</h1>

   <div class="box-container">

   <?php
      $select_account = $conn->prepare("SELECT * FROM `tutors`");
      $select_account->execute();
      if($select_account->rowCount() > 0){
         while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> Tutor id : <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> Tutor name : <span><?= $fetch_accounts['name']; ?></span> </p>
      <a href="teacher.php?delete=<?= $fetch_accounts['id']; ?>" class="delete-btn" onclick="return confirm('delete this account?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no accounts available</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->







<!-- custom js file link  -->
<script src="../js/mainadmin.js"></script>

</body>
</html>