<html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("Mg Mg" => 2000, "Aung Aung" => 1000, "Zaw Zaw" => 500);
         
         echo "Salary of Mg Mg is ". $salaries['Mg Mg'] . "<br />";
         echo "Salary of Aung Aung is ".  $salaries['Aung Aung']. "<br />";
         echo "Salary of Zaw Zaw is ".  $salaries['Zaw Zaw']. "<br />";
         
         /* Second method to create array. */
         $salaries['Mg Mg'] = "high";
         $salaries['Aung Aung'] = "medium";
         $salaries['Zaw Zaw'] = "low";
         
         echo "Salary of Mg Mg is ". $salaries['Mg Mg'] . "<br />";
         echo "Salary of Aung Aung is ".  $salaries['Aung Aung']. "<br />";
         echo "Salary of Zaw Zaw is ".  $salaries['Zaw Zaw']. "<br />";
      ?>
   
   </body>
</html>