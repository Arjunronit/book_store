<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images\aboutus_bg.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>BookBug offers online customers the Web's Premier destination for children's books, novels, comic books, ebooks and other related products. Our search engine enables customer to locate their book easily by browsing through categories. </p>
         <p>BookBug is the ideal destination for book loving parents to buy interesting books for their kids and make them literal book bug !!!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This site is really good. If its your first time I highly recommend you to go for it.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Oliver Green</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>BookBug is a website which every book lover parent will love. I am having a great experience buying from here and reading to my kids.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia Jones</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I have bought 5 books from here and I love all of them. Its a great experience over all.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aruthur Cole</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>So many varieties to choose from. Fast delivery and very good experience</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Samantha Brown</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The site is very user friendly and interactive. Great for buying kids' books</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Deborah Smith</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Really impressed with this one of a kind website. Enjoyed using it to buy books for my son</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rachel Hart</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\authora.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Roald Dahl</h3>
      </div>

      <div class="box">
         <img src="images\authorb.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>R.K Narayan</h3>
      </div>

      <div class="box">
         <img src="images\authorc.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Lewis Carroll</h3>
      </div>

      <div class="box">
         <img src="images\authord.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Margery Williams</h3>
      </div>

      <div class="box">
         <img src="images\authore.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sudha Murthy</h3>
      </div>

      <div class="box">
         <img src="images\authorf.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>E.B. White</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>