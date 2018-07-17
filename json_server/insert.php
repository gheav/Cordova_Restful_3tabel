<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_transaksi=$_POST['nama_transaksi'];
 $tanggal=$_POST['tanggal'];
 $jumlah=$_POST['jumlah'];
 $status=$_POST['status'];
 $q=mysqli_query($con,"INSERT INTO `data_transaksi` (`nama_transaksi`,`tanggal`,`jumlah`,`status`) VALUES ('$nama_transaksi','$tanggal','$jumlah','$status')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
