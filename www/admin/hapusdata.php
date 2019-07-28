<?php 
	$ambil = $koneksi->query("SELECT * from data where id='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$fotodata = $pecah['foto'];

	if (file_exists("../foto_data/$fotodata"))
	{
		unlink("../foto_data/$fotodata");
	}

	$koneksi -> query ("DELETE from data where id='$_GET[id]'");

	echo "<script>alert('Data Terhapus');</script>";
	echo "<script>location='index.php';</script>";
?>