Live Demo
<html>
   <body>
      
      <?php
         $marks = array( 
            "Mg Mg" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "Aung Aung" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "Zaw Zaw" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for Mg Mg in physics : " ;
         echo $marks['Mg Mg']['physics'] . "<br />"; 
         
         echo "Marks for Aung Aung in maths : ";
         echo $marks['Aung Aung']['maths'] . "<br />"; 
         
         echo "Marks for Zaw Zaw in chemistry : " ;
         echo $marks['Zaw Zaw']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>