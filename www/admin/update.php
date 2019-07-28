<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $foto=$_POST['foto'];
 $alamat=$_POST['alamat'];
 $fakultas=$_POST['fakultas'];
 $q=mysqli_query($koneksi,"UPDATE `data` SET `nama`='$nama',`nim`='$nim',`foto`='$foto',`alamat`='$alamat',`fakultas`='$fakultas' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
