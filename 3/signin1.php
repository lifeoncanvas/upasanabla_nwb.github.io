<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="signin.css" >
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Josefin+Slab:wght@700&family=Niconne&family=Righteous&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400&display=swap" rel="stylesheet">
   <title>nav</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>

  </head>
<body>

               <?php
include  "navbar.php";

?>
<br><br><br><br><br><br>

<div class="hero">
  <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
         <button type="button" class="toggle-btn"> Sign In</button>

      </div>
      <div class="social-icons">
        <img src="insta.jpg">
         <img src="facebook.jpg">


  </div>
   <form action="signin1.php" method="POST" class="input-group">
      <input type="text" class="input-field" name="fname" placeholder="first name"><br>
      <input type="text" class="input-field" name="lname" placeholder="last name"><br>
      <input type="text" class="input-field" name="email" placeholder="Email Id"><br>
      <input type="text" class="input-field" name="password" placeholder="Password"><br>
      <input type="text" class="input-field" name="cpassword" placeholder="Confirm Password"><br>
        <hr>
      <input type="submit" class="input-btn" name="signup" value="Log In">
      </form>
  </div>
    <!-- Tabs Titles -->
    <hr>
    
  


</div>

  </div>


    <!-- Signup Form -->
   
      <?php
      error_reporting(E_ERROR | E_WARNING | E_PARSE);
      include "connect.php";

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];



      //First Name Validation
      if(isset($_POST['signup']))
     {
      if(empty($fname))
      {
         echo '<script>alert("First Name cannot be blank")</script>';

      }
      else if (!preg_match("/^[a-zA-Z ]*$/",$fname))
      {
         echo '<script>alert("First name can only contain characters and spaces")</script>';
      }

      //Last Name Validation
      else if (empty($lname))
      {
        echo '<script>alert("Last Name cannot be blank")</script>';
      }
      else if (!preg_match("/^[a-zA-Z ]*$/",$lname))
      {
        echo '<script>alert("Last name can only contain characters and spaces")</script>';
      }

      //Email Validation
      else if (empty($email))
      {
          echo '<script>alert("Email Name cannot be blank")</script>';
      }
      else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           echo '<script>alert("Please Enter a valid email id")</script>';
       }
       //Password Validation
       else if (empty($password) or empty($cpassword))
       {
           echo '<script>alert("Password cannot be blank")</script>';
       }
       else if($password!=$cpassword)
       {
          echo '<script>alert("Passwords donot match")</script>';
       }
       else
        {
          $sql = "INSERT INTO sign (first_name, last_name, email, password) VALUES ('$fname','$lname','$email','$password')";
          if ($con->query($sql) === TRUE) {
           echo '<script>alert("Record created sucessfully")</script>';
          }
           else {
           echo '<script>alert("Record not created sucessfully")</script>';
             }
          include "useraccdetails.php";
              $con->close();

          echo '<script>alert("Account created sucessfully")</script>';
          echo '<script>window.open("log.php","_blank")</script>';

        }
      }
?>


  <br>
  <hr>
 
</body>
</html>

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
