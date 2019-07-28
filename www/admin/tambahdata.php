<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Nim</label>
		<input type="number" class="form-control" name="nim">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Fakultas</label>
		<input type="text" class="form-control" name="fakultas">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php 
	if (isset($_POST['simpan']))
	{
		$nama=$_FILES['foto']['name'];
		$lokasi=$_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi,"../foto_data/".$nama);
		$koneksi->query("INSERT into data 
			(nama,nim,foto,alamat,fakultas)
			values('$_POST[nama]','$_POST[nim]','$nama','$_POST[alamat]','$_POST[fakultas]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	}
 ?>