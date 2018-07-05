<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `course_details`INNER JOIN status_transaksi ON course_details.`status` = status_transaksi.id_status");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>