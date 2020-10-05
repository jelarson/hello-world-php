<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
<?php
  for($i = 1; $i <= 5; $i++){
    echo "$i <br>";
  }

  $luckyNumbers = array(1,3,7,13,15,20,22);
  for($i = 0; $i <= count($luckyNumbers); $i++){
    echo "$luckyNumbers[$i] <br>";
  }
?>

</body>
</html>