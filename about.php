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
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At our bookshop, we take pride in offering a wide range of books to suit every taste and interest. Our portion is carefully curated to ensure that our customers can find the books they're looking for quickly and easily.Our portion includes all the major genres, from fiction to non-fiction, romance to thriller, and everything in between. We also have a dedicated children's section, with books for every age group, from picture books to young adult novels.</p>
         <p>In addition to traditional print books, we also offer a selection of e-books for those who prefer to read on their electronic devices. Our e-book portion includes bestsellers, classics, and everything in between, so you can find the perfect read no matter your preferences.</p>
         <p>At our bookshop, we believe that reading should be accessible to everyone. That's why we offer a selection of discounted books in our portion. These books may be older titles, but they're still great reads, and they're priced to sell. We also offer a selection of used books, which are perfect for those who want to save money while still enjoying great literature.Whether you're a seasoned bookworm or a casual reader, our portion has something for you. Come and explore our shelves today and discover your next great read.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/a1.jpg" alt="">
         <p>I recently used it and was pleasantly surprised by the convenience and affordability. The service allowed me to order books online from a wide range of publishers and distributors and have them delivered directly to my door. The delivery was incredibly fast and reliable, and I was able to track my order's progress at every stage.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nafisa Haque</h3>
      </div>

      <div class="box">
         <img src="images/a2.jpg" alt="">
         <p>This service is an amazing way to get your favorite books delivered right to your doorstep. I recently used one of these services and I am so glad I did. They have a huge selection of books, from classics to contemporary novels. The prices are very reasonable, and the books are delivered quickly and securely. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tafannaum</h3>
      </div>

      <div class="box">
         <img src="images/a5.jpg" alt="">
         <p>I recently used this online bookshop service to purchase a few books, and I couldn't be happier with the experience. The website had an extensive collection of titles, covering a wide range of genres and authors. The search function was efficient and helped me find exactly what I was looking for. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tanbin</h3>
      </div>

      <div class="box">
         <img src="images/a4.jpg" alt="">
         <p>I am extremely pleased with the user-friendly interface of this online bookshop. Navigating through the website was a breeze, with clear categories and intuitive filters to refine my search. The book descriptions were detailed and provided all the necessary information. In addition to the excellent website experience, the customer service was exceptional.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sadia</h3>
      </div>

      <div class="box">
         <img src="images/a3.jpg" alt="">
         <p>This online bookshop has become my go-to place for purchasing books due to its affordable prices and great deals. The prices are significantly lower compared to other online retailers, making it a budget-friendly option for book lovers. Furthermore, they frequently offer discounts and promotions, allowing me to save even more.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Suchi</h3>
      </div>

      <div class="box">
         <img src="images/a6.jpg" alt="">
         <p>One of the standout features of this online bookshop is its exceptional book recommendation system. The website's algorithm seems to understand my reading preferences better than I do myself. Every time I visit the site, I am presented with a tailored selection of book recommendations that align perfectly with my interests.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fatema</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/a1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nafisa</h3>
      </div>

      <div class="box">
         <img src="images/a2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tafannum</h3>
      </div>

      <div class="box">
         <img src="images/a5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tanbin</h3>
      </div>

      <div class="box">
         <img src="images/a4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sadia</h3>
      </div>

      <div class="box">
         <img src="images/a3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Suchi</h3>
      </div>

      <div class="box">
         <img src="images/a6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Fatema</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>