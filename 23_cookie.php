<?php

/***
 * 
 * should be called before <html> tag
 * 
 * 
 * time()
 * 
 * specify a future time in seconds since 00:00:00 GMT on 1st Jan 1970
 * 
 * setcookie(name, value, expire, path, domain, security);
 * 
 */

setcookie("address", "yangon", time()+3600, "/", "",  0);

/****
 * 
 * Accessing the cookie value
 * 
 * 
 */

echo $_COOKIE["address"]. "<br />";
         
/* is equivalent to */
echo $HTTP_COOKIE_VARS["address"]. "<br />";

echo $_COOKIE["address"] . "<br />";

/* is equivalent to */
echo $HTTP_COOKIE_VARS["address"] . "<br />";


/******
 * 
 * 
 * Deleting cookies
 * 
 * setcookie( "name", "", time()- 60, "/","", 0);
 * 
 * 
 */

setcookie( "address", "", time()- 60, "/","", 0);


?>