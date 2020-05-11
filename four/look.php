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
 <link     href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
   <title>look</title>
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
    <img src="dress1.jpg">
    <h2>Rs 1687</h2>
      <input type="submit" name="look1" value="CART"> 
    <img src="dress6.jpg">
    <h2>Rs 1086</h2>
      <input type="submit"  value="out of stock">
    <img src="dress8.jpg">
    <h2>Rs 2786</h2>
      <input type="submit"  value="out of stock">
    <img src="dress9.jpg">
    <h2>Rs 1000</h2>
      <input type="submit" value="out of stock">
    <img src="c5.jpg">
    <h2>Rs 1700</h2>
      <input type="submit"  value="out of stock">
    
   
  </div>
  <div class="column">
    <img src="dress3.jpg">
    <h2>Rs 1687</h2>
      <input type="submit" name="look2" value="CART"> 
    <img src="c9.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="pi5.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="dress10.jpg">
    <h2>Rs 786</h2>
      <input type="submit"  value="out of stock">
    <img src="indian5.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="pi8.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
  </div>
  <div class="column">
    <img src="dress5.jpg">
    <h2>Rs 1687</h2>
      <input type="submit" name="look3" value="CART"> 
    <img src="c5.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="c3.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="c4.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    
   
  </div>
  <div class="column">
    <img src="indian.jpg">
    <h2>Rs 1687</h2>
      <input type="submit" name="look4" value="CART"> 
    <img src="indian2.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="indian3.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">
    <img src="indian4.jpg">
    <h2>Rs 786</h2>
      <input type="submit"   value="out of stock">

   
  </div>
</div>

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