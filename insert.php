<?php 

	// 
	require_once('connection.php');
	
	// FUNGSI SQL INSERT DATA
	$sql = "INSERT INTO tutors(first_name, last_name) VALUES ('Sulenias','Asso')";

	// FUNGSI MENGIRIM DATA
	$connection->query($sql);

 ?>