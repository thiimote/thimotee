<?php
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
  $day=$_GET['day'];
  $date=$_GET['date'];
  $year=$_GET['year'];
  if (!empty($day) && !empty($date) && !empty($year)) {
    echo 'it is'.$day.''.$date.''.$year;
  }
  else {
    echo "fill in all field";
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
     <form class="form" action="form.php" method="GET">
       <b>day:</b> <br><input type="text" name="day" value=""> <br>
       <b>date:</b> <br><input type="text" name="date" value=""> <br>
       <b>year:</b> <br><input type="text" name="year" value=""> <br>
       <input type="submit"value="submit">
          </form>
   </body>
 </html>
