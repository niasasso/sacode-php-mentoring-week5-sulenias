<?php 

	// INTEGRASI KONEKSI
	require_once('connection.php');
	
	// FUNGSI DROP DATABASE
	$sql = "DROP DATABASE nokensoft";
	$connection->query($sql);

 ?>