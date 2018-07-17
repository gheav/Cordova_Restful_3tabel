<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_transaksi=$_POST['id_transaksi'];
 $nama_transaksi=$_POST['nama_transaksi'];
 $tanggal=$_POST['tanggal'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"UPDATE `data_transaksi` SET `nama_transaksi`='$nama_transaksi',`tanggal`='$tanggal',`jumlah`='$jumlah' where `id_transaksi`='$id_transaksi'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
