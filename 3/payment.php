<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
    }
hr {
  border-top: 1px solid white;
  }
  h2{
    text-align: center;

  }

body {
  background-image: url('pin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  color:white;
  margin-top: 40px;
    }

</style>

  </head>
  <body>
<?php
include "navbar.php";
 ?>

 <br><br><br><br><br><br><br>
 <hr>
 <div class="container">
  <div class="hero">
  <form class="form-horizontal" role="form" method="post">
    <fieldset>
      <h2>Payment</h2>
      <hr>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Card Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" >Expiration Date</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-3">
              <input type = "number" placeholder= "Date" style = "width :60px">
            </div>
            <div class="col-xs-3">
            <input type ="number" placeholder="Year" style = "width : 60px">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <input type="submit" class="btn btn-success" name="pay" value = "Pay Now">
        </div>
      </div>
    </fieldset>
  </form>
</div>
</div>
<?php
include "connect_cart.php";
if (isset($_POST['pay'])) {
echo '<script>alert("Payment Sucessfull. Your order will be delivered to you within 5-7 working days")</script>';
mysqli_query($con,'TRUNCATE TABLE products');
echo '<script>window.open("home.php","_self")</script>';

}

 ?>
</body>
</html>
