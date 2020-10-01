<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  <?php
    // no quotes needed
    // whole nums - integers
    echo -40;
    // can handle calculations - order of operations in tact
    echo 5 + 9 - 1 * 2;
    // modulus operator - gives remainder after division
    echo 10 % 3;
    // plus-equls operator
    $num = 25;
    $num = $num + 10;
    // or
    $num+=10;
    // absolute value
    echo abs(-100);
    // exponent - 2 raised to the fourth
    echo pow(2, 4);
    // sqrt
    echo sqrt(144);
    // compare nums - which of the two nums is bigger or smaller
    echo max(2, 10);
    echo min(2, 10);
    // round numbers
    echo round(3.2);
    echo round(3.7);
    // round up
    echo ceil(3.2);
    // round down
    echo floor(3.8);
  ?>
</body>
</html>