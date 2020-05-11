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
   <title>casual</title>
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
    <img src="shirt8.jpg">
    <h2> Rs 1687 </h2>
     <form method="POST">
        <input type="submit" name="men-c1" value="CART">
      </form>
    <img src="shirt2.jpg">
    <h2>RS 980</h2> 
        <input type="submit"value="out of stock"> 
    <img src="shirt3.jpg">
    <h2>RS 700</h2>
        <input type="submit"  value="out of stock">
    <img src="shirt4.jpg">
    <h2> RS 1679</h2>
        <input type="submit"  value="out of stock">
   
  
  </div>
    
   

  <div class="column">
   
    <img src="shirt6.jpg">
    <h2>Rs 1687</h2>
     <form method="POST">
        <input type="submit" name="men-c2" value="CART"> 
      </form>
    <img src="shirt7.jpg">
    <h2>Rs 1600</h2>
        <input type="submit" value="out of stock"> 
    <img src="shirt1.jpg">
    <h2>Rs 548</h2>
          <input type="submit"  value="out of stock"> 
        
    <img src="shirt9.jpg">
    <h2>Rs 780</h2>
        <input type="submit"  value="out of stock"> 
        
    <img src="shirt10.jpg">
    <input type="submit"  value="out of stock"> 
       
      
  
       
      

 
  </div>
    <div class="column">
    <img src="shirt19.jpg">
    <h2>Rs 1000</h2>
     <form method="POST">
        <input type="submit" name="men-c3" value="CART">
      </form>
    <img src="shirt12.jpg">
    <h2>Rs 2000</h2>
        <input type="submit" value="out of stock"> 
  
       
    <img src="shirt14.jpg">
    <h2>Rs 2000</h2>
        <input type="submit" value="out of stock"> 
     
       
    <img src="shirt22.jpg">
    <h2>Rs 2000</h2>
        <input type="submit" value="out of stock"> 
      
   
    
   
  </div>
  <div class="column">
    <img src="shirt18.jpg">
    <h2>Rs 1687</h2>
     <form method="POST">
      <input type="submit" name="men-c4" value="CART">
    </form>
    <img src="shirt11.jpg">
    <h2>Rs 786</h2>
      <input type="submit"  value="out of stock">
    <img src="shirt16.jpg">
    <h2>Rs 786</h2>
      <input type="submit" value="out of stock">
   
    <img src="shirt20.jpg">
    <h2>Rs 786</h2>
      <input type="submit" value="out of stock">
    

    
  </div>
</div>


 <?php
include  "connect_cart.php";

?>
<?php
if(isset($_POST['men-c1'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',1687)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item  unsucessful")</script>';
         }
  }
?>

<?php
if(isset($_POST['men-c2'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('H&M',1687)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

<?php
if(isset($_POST['men-c3'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('zara',1000)";
      if ($con->query($sql) === TRUE) {
      echo '<script>alert("Item added to cart sucessfully")</script>';
      }
       else {
       echo '<script>alert("Item added to cart unsucessfully")</script>';
         }
  }
?>

 <?php
if(isset($_POST['men-c4'])) {
      $sql = "INSERT INTO products (product_name,price) VALUES ('Jimmy choo',1687)";
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