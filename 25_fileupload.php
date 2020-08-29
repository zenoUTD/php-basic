<?php

/****
 * 
 * add enctype="multipart/form-data"  to form tag
 * 
 * named img in input tag
 * 
 * in action.php
 * 
 */


$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if($image) 
    move_uploaded_file($tmp, "image/$image");



?>