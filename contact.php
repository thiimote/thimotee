<?php
if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_message'])) {
if (!empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_message'])) {
  if(strlen($_POST['contact_name'])>25 or strlen($_POST['contact_email'])>30 or strlen($_POST['contact_message'])>600){
    echo "sorry, max_length of some field has exceeded";
  }
  else {
       $to = 'thimoteeharerimana@gmail.com';
       $subject = 'contact form submitted.';
       $body = $_POST['contact_message'];
       $headers = 'from:'.$_POST['contact_email'];
       if (@mail($to, $subject, $body, $headers)) {
         echo "thank u for contact us";
       }
       else {
         echo "may an error occured, please try again later";
       }
}
}
else {
  echo "fill all fields";
}
}
 ?>
 <form action="contact.php" method="post">
   name: <br> <input type="text" name="contact_name" maxlength="25"> <br>
   email_address: <br><input type="text" name="contact_email" maxlength="30"> <br>
   message: <br><textarea name="contact_message" rows="8" cols="40" maxlength="1000"></textarea> <br> <br>
   <input type="submit" value="send">
 </form>
