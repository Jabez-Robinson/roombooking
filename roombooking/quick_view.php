<!-- <?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="quick-view">

   <h1 class="heading">quick view</h1>

   <?php
     $pid = $_GET['pid'];
     $select_products = $conn->prepare("SELECT * FROM `post` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <div class="row">
         <div class="image-container">
            <div class="main-image">
               <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
               
            </div>
            <div class="sub-image">
               <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="">
            </div>
         </div>
         <div class="content">
            <div class="name"><?= $fetch_product['name']; ?></div>
            <div class="flex">
               <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
            </div>
            <div class="details"><?= $fetch_product['details']; ?></div>
            <div class="flex-btn">
               <input type="submit" value="BOOK NOW" class="btn" name="add_to_cart">
               
            </div>
         </div>
      </div>
   </form>
   <div>

   <br><br>
          <h2>CUSTOMER REVIEW</head>

         <h1>COMMENTS</h1>
        <div class="comments">
         <h1><?= $fetch_product['cusname']; ?></h1>
         <p><?= $fetch_product['comment']; ?></p>
        </div>
<script>

function rate1()
{
   const r1 = "<?= $fetch_product['rate1']; ?>";

document.getElementById("rating1").style.width = r1+"px";
}

function rate2()
{
   const r2 = "<?= $fetch_product['rate2']; ?>";
   document.getElementById("rating2").style.width = r2+"px";
}


function rate3()
{
   const r3 = "<?= $fetch_product['rate3']; ?>";

   document.getElementById("rating3").style.width = r3+"px";
}


function rate4()
{
   const r4 = "<?= $fetch_product['rate4']; ?>";

   document.getElementById("rating4").style.width = r4+"px";
}

function rate5()
{
   const r5 = "<?= $fetch_product['rate5']; ?>";

   document.getElementById("rating5").style.width = r5+"px";
}


rate1();

rate2();
rate3();
rate4();
rate5();


//alert(r3);



</script>


      </div>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

</section>













<?php include 'components/footer.php'; ?>

<script src="script.js"></script>
<script src="rating.js"></script>

</body>
</html> -->