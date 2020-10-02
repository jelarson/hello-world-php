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

  ?>

</body>
</html>