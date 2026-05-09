<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product Page</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products`WHERE name LIKE '%Panadol%'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0)
         while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <section class=body1>
    <div class="pagination">
     <b>   <a href="home.php" style="color: Black;" >Home</a> > <a href="shop.php" style="color: Black;">Shop</a> > <a href="panadol.php" style="color: Black;">Panadol Blue Paracetamol 500 Mg - 24 Tabs</a></b>
    </div>
    <!-- product section -->
    <form action="" method="post" class="box">
    <section class="product-container">
        <!-- left side -->
        <div class="img-card">
            <img src="images/panadol.jpg" alt="" id="featured-image">
            <!-- small img -->
            <div class="small-Card">
                <img src="images/panadol.jpg" alt="" class="small-Img">
                <img src="images/panadol2.jpg" alt="" class="small-Img">
                <img src="images/panadol3.jpg" alt="" class="small-Img">
                <img src="images/panadol4.jpg" alt="" class="small-Img">
            </div>
        </div>
        <!-- Right side -->
        <div class="product-info">
            <h3> <div class="name"><?php echo $fetch_products['name']; ?></div></h3>
            <h5>  <div class="price">SAR <?php echo $fetch_products['price']; ?></div></h5>
            <h5>Scientific Name: </h5><p>Paracetamol</p><br>
            <hr>
            <h5>Therapeutic Indications Of Panadol :</h5>
            <ul>
                <li>Headache: a very common condition that most people will experience many times during their lives. The main symptom of a headache is pain in your head or face. This can be throbbing, constant, sharp, or dull.</li>
                <li>Period pain</li>
                <li>Backache</li>
                <li>Rheumatic pain (joints pain)</li>
                <li>Cold and flu</li>
                <li>Sore throat</li>
                <li>Mild arthritis pain (joints pain)</li>
                <li>Muscle Pain</li>
                <li>Toothache</li>
                <li>Fever: a temporary increase in your body temperature.</li>

            </ul>


            <div class="quantity">
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <button type="submit" value="add to cart" name="add_to_cart">Add to Cart</button>
            </div>
        </div><input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">  </form>
    </section>
    <?php
         
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
</section>
<?php include 'footer.php'; ?>
    <!-- script tags -->

    <script src="js/script.js"></script>
</body>
</html>