<?php
include "koneksi.php";
$idpegawai=$_GET['id'];
$sql="Delete from tabelpegawai where id_pegawai = '$idpegawai'";
$result=mysql_query ($sql);
echo "Data Telah Dihapus";

echo "<meta http-equiv=refresh content=1;url=form_pegawai.php>";
?>
