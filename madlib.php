<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <form action='madlib.php' method='get'>
    Color: <input type='text' name='color'> <br>
    Plural Noun: <input type='text' name='pluralNoun'> <br>
    Animal: <input type='text' name='animal'> <br>
    <input type='submit'>
  </form>
  <br><br>

  <?php 
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $animal = $_GET['animal'];

    echo "Roses are {color} <br>";
    echo "{plural noun} are blue <br>";
    echo "I love {animal} <br>";
  
  ?>

</body>
</html>