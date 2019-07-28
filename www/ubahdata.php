<h2>Ubah Produk</h2>
<?php 
	$ambil = $koneksi -> query("SELECT * from data where id='$_GET[id]'");
	$pecah = $ambil ->fetch_assoc();

 ?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama'];?>">
	</div>
	<div class="form-group">
		<label>Nim</label>
		<input type="number" class="form-control" name="nim" value="<?php echo $pecah['nim'];?>">
	</div>
	
	<div>
		<img src="../foto_data/<?php echo $pecah['foto']; ?>" width="100">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto" >
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat'];?>">
	</div>
	<div class="form-group">
		<label>Fakultas</label>
		<input type="text" class="form-control" name="fakultas" value="<?php echo $pecah['fakultas'];?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST["ubah"])) 
{

	$namafoto=$_FILES['foto']['name'];
	$lokasifoto=$_FILES['foto']['tmp_name'];
	//jika foto dirubah
	if (!empty($lokasifoto)) 
	{
		move_uploaded_file($lokasifoto, "../foto_data/$namafoto");

		$koneksi->query("UPDATE data SET nama='$_POST[nama]',nim='$_POST[nim]',
			foto='$namafoto',alamat='$_POST[alamat]',fakultas='$_POST[fakultas]' WHERE id='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE data SET nama='$_POST[nama]',nim='$_POST[nim]',
			alamat='$_POST[alamat]',fakultas='$_POST[fakultas]' WHERE id='$_GET[id]'");
	}

	echo "<script>alert('Data Telah Diubah');</script>";
	echo "<script>location='index.php';</script>";
}
 ?>