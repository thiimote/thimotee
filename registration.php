<?php
require 'connect.inc.php';
require 'core.inc.php';



if (isset($_POST['username']) && isset($_POST['password']) &&
 isset($_POST['passwordagain']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
  $username = $_POST['username'];
  $password = ($_POST['password']);
  $md5 = md5($password);
  $passwordagain = $_POST['passwordagain'];
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
if (!empty($username) && !empty($password) && !empty($passwordagain)&& !empty($firstname) && !empty($surname)) {
$query = " SELECT * FROM users WHERE  username = '$username' AND password = '$md5' ";
$result = mysqli_query($mysqli_con, $query);
if (mysqli_num_rows($result)== 1){
  echo "$username already exit";
}
else {
  $query = " INSERT INTO users  VALUES ('','$username', '$md5', '$firstname', '$surname')";
  if ($result = mysqli_query($mysqli_con, $query)) {
  //  echo "successfull";
  header('location: welcome.php');
  }
else {
  echo "failed";
}
}
}
else {
  echo "all field are required";
}
}

 ?>
    <p>
      RGISTRATION FORM
    </p>
<form class="" action="registration.php" method="post">
  username: <br>
  <input type="text" name="username"> <br>
  password: <br>
  <input type="password" name="password"><br>
  password again:<br>
  <input type="password" name="passwordagain"><br>
  firstname:<br>
  <input type="text" name="firstname"><br>
  surname:<br>
  <input type="text" name="surname"><br>
  <br>
  <input type="submit" value="register">
</form>
