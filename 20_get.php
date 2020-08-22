<?php

#http://www.test.com/index.htm?name1=value1&name2=value2

/*

1024 characters only

Never use GET method if you have password or 
other sensitive information to be sent to the server

*/


   if( isset($_GET["name"]) || isset($_GET["age"]) ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>

