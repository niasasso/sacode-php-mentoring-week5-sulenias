<?php 

	// 
	require_once('connection.php');
	
	// 
	$sql = "CREATE TABLE studants(
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(30) NOT NULL,
		last_name VARCHAR(30) NOT NULL,
		email VARCHAR(50) NULL
	)";

	$connection->query($sql);

 ?>