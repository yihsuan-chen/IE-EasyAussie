<?php 
	// Create Connection
	$conn = mysqli_connect('localhost', 'root', '1234', 'uni_distances');

	//Check connection 
	if(mysqli_connect_errno()){
		//Connection Failed
		echo "Failed to connect to MySQL". mysqli_connect_errno;
	}

 ?>