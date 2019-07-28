<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $foto=$_POST['foto'];
 $alamat=$_POST['alamat'];
 $fakultas=$_POST['fakultas'];
 $q=mysqli_query($koneksi,"INSERT INTO `data` (`nama`,`nim`,`foto`,`alamat`,`fakultas`) VALUES ('$nama','$nim','$foto','$alamat','$fakultas')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
