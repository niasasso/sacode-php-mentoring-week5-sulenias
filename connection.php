<?php 

	// BUAT KONEKSI TANPA DATABASE
	// $connection = new mysqli('localhost', 'root', '');

	// Buat koneksi dengan atabase
	$connection = new mysqli('localhost', 'root', '', 'sagu');

	// if(!$connection->connect_error){
	// 	echo "Koneksi BERHASIL";
	// } else {
	// 	echo "Koneksi GAGAL";
	// }

 ?>