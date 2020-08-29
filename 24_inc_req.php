<?php

/********
 * 
 *  
 * 
 *  takes all the text in a specified file and copies it 
 *  into the file that uses the include function.
 * 
 *  The include() Function
 * 
 *  If there is any problem in loading a file then the include() function 
 *  generates a warning but the script will continue execution
 * 
 * 
 */

 include('');

 /*******
  * 
  * The require() Function
  *
  * If there is any problem in loading a file then the require() 
  * function generates a fatal error and halt the execution of the script.
  *
  */

  require('');

  /*******
  * 
  * The require_once() Function
  *
  * If there is any problem in loading a file then the require() 
  * function generates a fatal error and halt the execution of the script.
  *
  * will check whether the file is already included or not if it is already 
  * included then it won't include the file whereas the require function will 
  * include the file irrespective of whether file is already included or not.
  *
  */

  require_once('');

?>