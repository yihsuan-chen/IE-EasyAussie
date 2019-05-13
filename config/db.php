<?php 
	// 关联数据库
	$conn = mysqli_connect('localhost', 'root', '1234', 'uni_distances');

	//try catch
	if(mysqli_connect_errno()){
		//throws
		echo "Failed to connect to MySQL". mysqli_connect_errno;
	}

 ?>