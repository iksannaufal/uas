<section class="konten">
	<div class="container">
<h1>Data Mahasiswa</h1>
<hr>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Foto</th>
			<th>Alamat</th>
			<th>Fakultas</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	        <?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * from data"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['nim']; ?></td>
			
			<td>
				<img src="../foto_data/<?php echo $pecah['foto']; ?>" width="100">
			</td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['fakultas']; ?></td>
			<td>
				<a href="index.php?halaman=hapusdata&id=<?php echo $pecah['id']; ?>" class="btn-danger btn glyphicon glyphicon-remove-circle"> Hapus</a>
				<a href="index.php?halaman=ubahdata&id=<?php echo $pecah['id']; ?>" class="btn btn-warning glyphicon glyphicon-edit"> Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahdata" class= "btn btn-primary">Tambah Data</a>
<a href="readjson.html" class="btn btn-default">Read json</a>