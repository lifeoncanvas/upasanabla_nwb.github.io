<<html>
<body>
  <?php

  $con = mysqli_connect('localhost','root','','login');

  $fetch = "SELECT email, password FROM sign";

  if($result = $con->query($fetch)) {
  while($rows=$result->fetch_object())
  {
    $username = $rows->email;
    $pass= $rows->password;
  }

  $result->close();
}


  $con->close();
  ?>
</body>
</html>
