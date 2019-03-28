<?php
 if ( isset($_POST['username']) && isset($_POST['password'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $md5 = md5($password);

   if (!empty($username) && !empty($password)) {
  $mysqli_con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($mysqli_con, "a_database");

     $query = " SELECT * FROM users WHERE  username = '$username' AND password = '$md5' ";
     $result = mysqli_query($mysqli_con, $query); // or die(mysqli_error());
     $count = mysqli_num_rows($result);
    //  $query_num_row = mysql_num_rows($query_run);
    if (mysqli_num_rows($result)== 0) {
     echo "uncorrect username or password.";
     echo ".<br> ";
     echo '<a href="registration.php"> create an acount</a>';
    }
    else if(mysqli_num_rows($result)== 1) {
        echo "login successfull.    $username .'<br>";
        echo 'welcome  to users page, here is your home page! <a href="logout.php"> log out </a>' ;
        echo ".'<br>";
        die();

    }
   }
  else {
   echo "enter username or password.";
   }
   }

 ?>

<form class="" action="login.php" method="post">
username: <input type="text" name="username" value=""> <br>
 password:<input type="password" name="password" value=""> <br>
<input type="submit" value="login">
</form>
