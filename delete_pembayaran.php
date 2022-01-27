<?php
include "koneksi.php";
$idpelanggan=$_GET['id'];
$sql="Delete from tabelpembayaran where id_pelanggan = '$idpelanggan'";
$result=mysql_query ($sql);
echo "Data Telah Dihapus";

echo "<meta http-equiv=refresh content=1;url=form_pembayaran.php>";
?>
