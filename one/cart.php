<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="cart.css" >
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Slab:wght@700&family=Niconne&family=Righteous&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
   <title>trousers</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="/path/to/masonry.pkgd.min.js"></script>

  </head>
  <body>
   <?php
include  "navbar.php";

?>
<br><br><br><br><br>
 <hr>
 <div class = "container">

 <h1 style="text-align: center">Your Cart</h1>
 <hr>
<?php
$con = mysqli_connect('localhost','root','','cart');
$product_total=0;
$fetch = "SELECT product_name, price FROM products";
$result = mysqli_query($con,$fetch);

if(mysqli_num_rows($result) > 0) {
  echo '<h2><table border="1" cellspacing="15" cellpadding="15" align="center">
        <tr>
            <td> <font face="Arial"><u>Product Name</u></font> </td>

            <td> <font face="Arial"><u>Price</u></font> </td>
        </tr></h2>';
while($rows=mysqli_fetch_assoc($result))
{
          $product_total = $product_total+$rows["price"];
          $product_name = $rows["product_name"];
          $product_price = $rows["price"];



          echo '<tr>
                 <td>'.$product_name.'</td>

                 <td>'.$product_price.'</td>
             </tr>';


}
echo '</table>';
echo '<hr>';
echo '<h2 style="text-align: center">Total = '.$product_total. ' INR Only</h2>';
echo '<hr>
<br>
<form method="POST" style="text-align: center;">
 <h2><u>Select Delivery Method</u></h2>
  <br>

  <h3>Cash On Delivery(COD) <input type="radio" name="payment" value="COD"><br>
    <br>
  Card Payment <input type="radio" name="payment" value="card"></h3>
  <br>
  <input type="submit" name="submit" value="Proceed">
';
}
else {
  echo '<h2>Your Shopping cart is empty</h2><br><hr>';

}
$con->close();
?>

<?php

if (isset($_POST['submit'])) {
if (isset($_POST['payment'])) {
 if($_POST['payment']=="card"){
    
   echo '<script>window.open("payment.php","_self")</script>';
   }

 elseif($_POST['payment']=="COD") {
   echo '<script>alert("Order placed sucessfully. Your order will be delivered to you within 5-7 working days")</script>';
   mysqli_query($con,'TRUNCATE TABLE products');
   echo '<script>window.open("home.php","_self")</script>';


   }
}
}
 ?>
</body>
</head>
