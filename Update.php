<?php 
include "koneksi.php";
$idpelanggan=$_POST['idpelanggan'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$umur=$_POST['umur'];
$pekerjaan=$_POST['pekerjaan'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];


mysql_query("Update tabelpelanggan set `id_pelanggan`='$idpelanggan',`nama`='$nama',`jenis_kelamin`='$jeniskelamin', 
`tempat_lahir`='$tempat',`tanggal_lahir`='$tahun-$bulan-$tanggal',`umur`='$umur',
`pekerjaan`='$pekerjaan',`alamat`='$alamat',`no_hp`='$nohp' where `id_pelanggan`='$idpelanggan'");
echo "Data Telah Diupdate";
echo "<meta http-equiv=refresh content=1;url=form_pelanggan.php>";

?>