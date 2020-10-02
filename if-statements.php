<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall){
      // chain with && - or operator is || - not operator is !
      echo "You are a tall male";
    } elseif($isMale && !$isTall){
      echo "You are a short male";
    }  elseif(!$isMale && $isTall) {
      echo "You are a tall female";
    } else {
      echo "You are a short female";
    }

    echo max(3, 6);
    function getMax($num1, $num2){
      if ($num1 >= $num2){
        return $num1;
      } else {
        return $num2;
      }
    }

    echo getMax(3, 6);

    function getMax2($num1, $num2, $num3){
      if ($num1 >= $num2 && $num1 >= $num3){
        return $num1;
      } elseif($num2 >= $num1 && $num2 >= $num3){
        return $num2;
      }else {
        return $num3;
      }
    }

    echo getMax2(300, 900, 400);
    echo getMax2(3000, 900, 400);
    echo getMax2(30, 90, 400);

    // == (double) is equal, != is not equal

  ?>

</body>
</html>