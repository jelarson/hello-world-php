<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  <!-- get methods show up in url as param -->
  <form action='madlib.php' method='get'>
    Password: <input type='password' name='password'> <br>
    <input type='submit'>
  </form>
  <br><br>

  <?php 
    echo $_GET['password'];
  ?>
  <br><br>
  <!-- post won't show up in url -->
  <form action='madlib.php' method='post'>
    Password: <input type='password' name='password1'> <br>
    <input type='submit'>
  </form>
  <br><br>

  <?php 
    echo $_POST['password1'];
  ?>

</body>
</html>