<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $phrase = "My favorite animal is a walrus";
  // make lower or upper case
  echo strtolower($phrase);
  echo strtoupper($phrase);
  // find string lenght
  echo strlen($phrase);
  // find char by index
  echo $phrase[0];
  // modify index
  $phrase[0] = 'R';
  echo $phrase;
  // string replace words or letters etc.
  echo str_replace('walrus', 'panda', $phrase)
  // substring - grab a section of the string - start at index 8 and grab 3 chars
  echo substr($phrase, 8, 3)
?>
  
</body>
</html>