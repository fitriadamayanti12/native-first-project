<?php
include "koneksi.php";
$idmeteran=$_GET['id'];
$sql="Delete from tabelmeteran where id_meteran = '$idmeteran'";
$result=mysql_query ($sql);
echo "Data Telah Dihapus";

echo "<meta http-equiv=refresh content=1;url=form_meteran.php>";
?>
