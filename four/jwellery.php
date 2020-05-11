<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="look.css" >
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Slab:wght@700&family=Niconne&family=Righteous&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
   <title>jewellery</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="/path/to/masonry.pkgd.min.js"></script>
  </head>
  <body>
    <?php
include  "navbar.php";

?>
<div class="row">

  <div class="column">
    <img src="jwel1.jpg">
    <h2>Rs 347</h2>
      <form method="POST">
    <input type="submit" name="jwel1" value="CART">
    <img src="jwel5.jpg">
    <h2>Rs 186</h2>
      <input type="submit"   value="out of stock">
    <img src="jwel6.jpg">
    <h2>Rs 286</h2>
      <input type="submit"   value="out of stock">
    <img src="jwel7.jpg">
    <h2>Rs 186</h2>
      <input type="submit"   value="out of stock">
  
    
   
  </div>
  <div class="column">
    <img src="jwel9.jpg">
    <h2>Rs 187</h2>
      <form method="POST">
    <input type="submit" name="jwel2" value="CART">
  </form>
    <img src="jwel10.jpg">
    <h2>Rs 186</h2>
      <input type="submit"   value="out of stock">
    <img src="jwel11.jpg">
    <h2>Rs 486</h2>
      <input type="submit"   value="out of stock">
      <img src="jwel8.jpg">
      <h2>Rs 386</h2>
        <input type="submit"   value="out of stock">
     
   
  </div>
  <div class="column">
    <img src="jwel14.jpg">
    <h2>Rs 187</h2>
      <form method="POST">
    <input type="submit" name="jwel3" value="CART">
  </form>
    <img src="jwel15.jpg">
    <h2>Rs 486</h2>
      <input type="submit"   value="out of stock">
    <img src="jwel16.jpg">
    <h2>Rs 386</h2>
      <input type="submit"   value="out of stock">
   
   
  </div>
  <div class="column">
    <img src="jwel18.jpg">
    <h2>Rs 187</h2>
      <form method="POST">
    <input type="submit" name="jwel4" value="CART">
       </form>
      <img src="jwel17.jpg">
      <h2>Rs 486</h2>
        <input type="submit"   value="out of stock">
        <img src="jwel12.jpg">
        <h2>Rs 299</h2>
          <input type="submit"   value="out of stock">
        <img src="jwel13.jpg">
        <h2>Rs 199</h2>
          <input type="submit"   value="out of stock">
      
     
   
  </div>
</div>


 <?php
include  "connect_cart.php";

?>

<?php
if(isset($_POST['jwel1'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',347)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>
<?php
if(isset($_POST['jwel2'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',187)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

<?php
if(isset($_POST['jwel3'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',187)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

<?php
if(isset($_POST['jwel4'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',187)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

 <script>
   var navbar = document.getElementById("navbar")
   window.onscroll= function(){
     "use strict";
     if(document.body.scrollTop >= 200){
       navbar.classList.add("nav-colored");
       navbar.classList.remove("nav-transperent");
     }
     else{
       navbar.classList.add("nav-transperent");
       navbar.classList.remove("nav-colored");
     }
   }
 </script>   


       
        
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>