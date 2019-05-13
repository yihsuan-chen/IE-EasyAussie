<?php 
require 'database.php';
 
$q = strval($_GET['q']);
$query = "SELECT AVG(cost) FROM internetbill WHERE datagb='$q'";
if ($is_query_run = mysqli_query($con,$query)) 
{ 
   
    while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
    { 
		
		$string_product = implode(',',$query_executed);
        echo round($string_product, 2);
    } 
} 
else
{ 
    echo "Error in execution"; 
} 
?> 