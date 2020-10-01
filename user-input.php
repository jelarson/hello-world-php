<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>

  <form action='user-input.php' method='get'>
    Name: <input type='text' name='name'>
    <br>
    Age: <input type='text' name='age'>
    <input type='submit'>
  </form>
  <br>
  Your name is 
  <?php 
    echo $_GET["name"]
  ?>
  Your age is 
  <?php 
    echo $_GET["age"]
  ?>

</body>
</html>