<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php
    $friends = array('kevin', 'karen', 'oscar', 'jim');
    echo $friends; // returns Array
    echo $friends[0]; // returns kevin
    $friends[0] = 'dwight';
    echo $friends[0]; // returns dwight
    // add element to array
    $friends[4] = 'angela';
    echo $friends[4]; // returns angela
    // how many elements in array?
    echo count($friends);
  ?>

</body>
</html>