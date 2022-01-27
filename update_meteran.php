<?php 
include "koneksi.php";
$idmeteran=$_POST['idmeteran'];
$tarifdaya=$_POST['tarifdaya'];
$spln=$_POST['spln'];


mysql_query("Update tabelmeteran set `id_meteran`='$idmeteran',`tarif_daya`='$tarifdaya',
`spln`='$spln' where `id_meteran`='$idmeteran'");
echo "Data Telah Diupdate";
echo "<meta http-equiv=refresh content=1;url=form_meteran.php>";

?>