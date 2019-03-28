<?php
$to = 'thimoteeharerimana@gmail.com';
$subject = 'this is my response';
$body = 'hello sir ."\n\n". l hope you got my response';
$headers = 'from: phpacademy <harerimanafils.thimote@yahoo.com>';
if (@mail($to, $subject, $body, $headers)) {
  echo "email has sent to ".$to;
}
else {
  echo "there wos an error while sending";
}
 ?>
