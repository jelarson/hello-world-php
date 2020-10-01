<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>

  <form action='user-input.php' method='post'>
    Student Name: <input type='text' name='student'>
    <br>
    <input type='submit'>
  </form>
  <br>
<?php
  $grades = array('Jim'=>'A+', 'Michael'=>'B-', 'Oscar'=>'C+');
  echo $grades['Jim']; // returns A+
  $grades['Jim'] = 'F';
  echo $grades['Jim']; // returns F

  echo $grades[$_POST['student']]; // returns grade of user inputted student name
?>

</body>
</html>