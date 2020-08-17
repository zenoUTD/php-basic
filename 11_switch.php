<?php

/*

switch (expression){
   case label1:
      code to be executed if expression = label1;
      break;  
   
   case label2:
      code to be executed if expression = label2;
      break;
      default:
   
   code to be executed
   if expression is different 
   from both label1 and label2;
}


*/
?>


<html>
   <body>
      
      <?php
         $d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "Wonder which day is this ?";
         }
      ?>
      
   </body>
</html>

