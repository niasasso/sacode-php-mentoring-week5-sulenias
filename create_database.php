<?php 

	// INTEGRASI KONEKSI
	require_once('connection.php');
	

	// FUNGSI BUAT DATABASE
	$sql = "CREATE DATABASE nokensoft";
	$connection->query($sql);

 ?>