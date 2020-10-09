<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title></title>
</head>
<body>
  
  <?php

    class Chef {
      function makeChicken(){
        echo "The chef makes chicken <br>";
      }
      function makeSalad(){
        echo "The chef makes salad <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
      }
    }

    class ItalianChef extends Chef {
      function makePasta(){
        echo "The chef makes pasta <br>";
      }
      function makeSpecialDish(){
        echo "The chef makes pizza <br>";
      }
      // overrides the inherited function
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();
    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    // italian chef class inherits from the chef class, so can still call makeChicken function
    $italianChef->makePasta();
    // italian chef can also use makePasta function, but normal chef cannot
    $italianChef->makeSpecialDish();
    // prints out 'the chef makes pizza' - original function was overriden. 

  ?>

</body>
</html>