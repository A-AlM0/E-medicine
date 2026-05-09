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
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img style="border-radius: 10%;" src="images/head.jpg" alt="">
      </div>
  
      
          <div class="content">
         <h3>We are</h3>
         <p>an online store for medicines our goal is to simplify the process of purchasing medicine and meet people's needs for medicines.</p>
         <h3>Why choose us?</h3>
         <p>In EMedicine store you could find the medicine you need in competitive prices with fast delivery everywhere.</p>
         
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>


   </div>

</section>






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>