<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>

  <form action='user-input.php' method='post'>
    Apples: <input type='checkbox' name='fruits[]' value='apples'>
    <br>
    oranges: <input type='checkbox' name='fruits[]' value='oranges'>
    <br>
    pears: <input type='checkbox' name='fruits[]' value='pears'>
    <br>
    bananas: <input type='checkbox' name='fruits[]' value='bananas'>
    <br>
    grapes: <input type='checkbox' name='fruits[]' value='grapes'>
    <br>
    watermelon: <input type='checkbox' name='fruits[]' value='watermelon'>
    <br>
    <input type='submit'>
  </form>
 
 <?php
  $fruits = $_POST['fruits'];
  echo $fruits[0] // returns what first fruit that was checked is
 ?>

</body>
</html>