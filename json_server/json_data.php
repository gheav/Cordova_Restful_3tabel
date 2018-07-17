<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `data_transaksi`INNER JOIN status_transaksi ON data_transaksi.`status` = status_transaksi.id_status");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
