<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Educa is an online learning and teaching marketplace with over 204000 courses and 54 million students. Learn programming, marketing, data science and more.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Improving lives through learning</h1>

   <div class="box-container">

      <div class="box">
         <p>Educa fit us like a glove. Their team curates fresh, up-to-date courses from their marketplace and makes them available to customers.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Nisha</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

      <div class="box">
         <p>Educa responds to the needs of the business in an agile and global manner. It’s truly the best solution for our employees and their careers.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

      <div class="box">
         <p>Educa fit us like a glove. Their team curates fresh, up-to-date courses from their marketplace and makes them available to customers. </p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Janani</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

      <div class="box">
         <p>We help organizations of all types and sizes prepare for the path ahead wherever it leads. Our curated collection of business and technical courses.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Steve</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

      <div class="box">
         <p>Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Shakshi</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

      <div class="box">
         <p> Ensure their clients keep up with the constant technological changes, Synechron needs to make sure their skills are up-to-date and develop your carrer </p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Adams</h3>
               <!-- <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div> -->
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>