<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>



<?php
include 'components/connect.php';

error_reporting(0);

if(isset($_POST['submit']))
{

$norooms = $_POST['norooms'];
$max = $_POST['max'];
$min = $_POST['min'];
$about = $_POST['about'];
$price = $_POST['price'];

$sql = "insert into post(norooms,  price, minnum, maxnum, about, userid) values('$norooms','$price','$min','$max','$about','$userid)";

$conn->query($sql)

}

?>

<section class="form-container">

   <form action="" method="post">
      <h3>add you post</h3>
      <input type="text" name="norooms" required placeholder="number of rooms" maxlength="20"  class="box">
      <p>no of days</p>
      <input type="text" name="max" required placeholder="minmum days" maxlength="2"  class="box">
      <input type="text" name="min" required placeholder="maximun days" maxlength="2"  class="box">
      <p>price</p>
      <input type="text" name="price" required placeholder="offer your price in ruppess"   class="box">
      <p>choose your image to upload</p>
      
      <input type="file" name="images" value="upload image" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      
      <p>About</p>
      <input type="text" name="about"  maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">

      <input type="submit" value="POST" class="btn" name="submit">
   </form>

</section>
    
</body>
</html>
<?php


echo "post";

?> -->