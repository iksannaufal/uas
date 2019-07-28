<h2>Detail Pembelian</h2>

<?php 
	$ambil = $koneksi->query("SELECT * from pembelian join pelanggan on pembelian.id_pelanggan =
		pelanggan.id_pelanggan where pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
 ?>

 <p>
 	<b><?php echo $detail['nama_pelanggan']; ?><br></b>
 	<?php echo $detail['tlp_pelanggan']; ?><br>
 	<?php echo $detail['email_pelanggan']; ?><br>
 	Tanggal : <?php echo $detail['tgl_pembelian']; ?><br>
 	Total : <?php echo $detail['total_pembelian']; ?>
 </p>

 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
 		<?php $ambil = $koneksi->query("SELECT * from pembelian_produk join produk on pembelian_produk.id_produk=produk.id_produk
 		where id_pembelian='$_GET[id]'"); ?>
 		<?php while($pecah =$ambil->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo $nomor; ?></td>
 			<td><?php echo $pecah['nama_produk']; ?></td>
 			<td><?php echo $pecah['harga_produk']; ?></td>
 			<td><?php echo $pecah['jumlah']; ?></td>
 			<td>
 				<?php echo $pecah['harga_produk']* $pecah['jumlah']; ?>
 			</td>
 		</tr>
 		<?php $nomor++; ?>
 		<?php } ?>
 	</tbody>
 </table>