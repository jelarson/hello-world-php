<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

    function cube($num){
      return $num * $num * $num;
      // without return, nothing will be passed to variable below
      // breaks function - any code lower won't be executed
      echo "hello"; // unreachable code
    }

    $cubeResult = cube(4);
    echo $cubeResult;
    // same as:
    echo cube(4);

  ?>

</body>
</html>