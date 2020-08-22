<?php

#An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.

#A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.

session_start();

$_SESSION['number'] = 10;


//unset($_SESSION[]);
//session_destroy();

 

?>