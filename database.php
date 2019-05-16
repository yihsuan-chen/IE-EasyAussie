<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root';
$mysql_password='1234'; 
$con= mysqli_connect ($mysql_host, $mysql_user, $mysql_password);
  
// function to connect with database having  
// argument host and user name 
if (!@mysqli_connect ($mysql_host, $mysql_user, $mysql_password)) 
{ 
    die('Cannot connect to database due to password issue'); 
} 
else
{ 
    // database name is server 
    if (@mysqli_select_db($con,"uni_distances")) 
    { 
         
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?>