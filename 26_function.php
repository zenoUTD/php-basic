<?php

/***
 * 
 * 
 * Function
 * 
 * There are two parts which should be clear to you −
 * Creating a PHP Function
 * Calling a PHP Function
 * 
 * 
 * 
 * 
 */

?>


<html>
   
<head>
   <title>Writing PHP Function</title>
</head>

<body>
   
   <?php
      /* Defining a PHP Function */
      function writeMessage() {
         echo "You are really a nice person, Have a nice time!";
      }
      
      /* Calling a PHP Function */
      writeMessage();
   ?>
   
</body>
</html>


<?php

/***
 * 
 * Passing Arguments by Reference
 * 
 */

?>

<html>
   
   <head>
      <title>Passing Argument by Reference</title>
   </head>
   
   <body>
      
      <?php
         function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
      
   </body>
</html>