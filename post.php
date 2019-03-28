<?php
$match='fils123';
if (isset($_POST['password'])) {
  $password=$_POST['password'];
  if (!empty($password)) {
  if ($password==$match) {
    echo "that is correct";
  }
  else {
    echo "wrong password";
  }
}
else {
  echo "enter password";
}
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       .form{
         background-color: #bada8b;
width: 253px;
height: 203px;
margin-left: 226px;
margin-top: 100px;
padding-left: 36px;
padding-top: 23px;
border-radius: 9px;
       }
     </style>
   </head>
   <body>
     <form class="form" action="post.php" method="POST">
       <b>Password:</b> <input type="password" name="password" value="">
       <input type="submit"value="submit">
          </form>
   </body>
 </html>
