<?php

$link = mysqli_connect('localhost','root','','fast'); 

if (!$link) { 
    die('Could not connect to MySQL: ' . mysqli_error($link)); 
} 
?>