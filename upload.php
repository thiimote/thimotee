<?php
@$name=$_FILES['file']['name'];
$extension= strtolower(substr($name, strpos($name,'.') + 1));

@$type=$_FILES['file']['type'];

@$size=$_FILES['file']['size'];
$max_size=100000;

@$tmp_name=$_FILES['file']['tmp_name'];

if (isset($name)) {
  if (!empty($name)) {
    if($extension=='jpg' or $extension=='jpeg'&& $type=='image/jpeg' && $size>=$max_size){
  $location = 'uploaded images/';
if(move_uploaded_file($tmp_name,$location.$name)){
  echo "file uploaded successsful";
}
else {
  echo "there wos an error! file must have 2MB OR less";
}
}
else {
echo "file must be jpg or jpeg";
}
}
else {
  echo "please upload a file";
}
}
 ?>
 <form  action="upload.php" method="post" enctype="multipart/form-data">
   <input type="file" name="file" value=""> <br> <br>
   <input type="submit" value="submit">

 </form>
