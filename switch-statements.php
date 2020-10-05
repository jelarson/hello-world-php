<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
<form action="switch-statements.php" method="post">
 What Was your grade?
  <input type='text' name='grade'><br>
  <input type='submit'>
  </form>

  <?php
    $grade = $_POST["grade"];
    // echo $grade;
    switch($grade){
      case "A":
        echo "You did amazing!";
      break;
      case "B":
        echo "You did pretty well!";
      break;
      case "C":
        echo "You did okay";
      break;
      case "D":
        echo "You can do better!";
      break;
      case "F":
        echo "Yikes! You failed!";
      break;
      default: 
        echo "Invalid grade entered";
    }
  ?>

</body>
</html>