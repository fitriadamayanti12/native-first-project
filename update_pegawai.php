<?php 
include "koneksi.php";
$idpegawai=$_POST['idpegawai'];
$namapegawai=$_POST['namapegawai'];
$jeniskelamin=$_POST['jeniskelamin'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];

if($jabatan="Admin 1"){
$tunjanganjabatan=5000000;
$tunjangantransport=500000;
$tunjanganmakan=400000;
}
else if($jabatan="Admin 2"){
$tunjanganjabatan=4000000;
$tunjangantransport=400000;
$tunjanganmakan=350000;
}
else if($jabatan="Admin 3"){
$tunjanganjabatan=3000000;
$tunjangantransport=300000;
$tunjanganmakan=300000;
}
else if($jabatan="Admin 4"){
$tunjanganjabatan=2000000;
$tunjangantransport=200000;
$tunjanganmakan=250000;}

else if($jabatan="Admin 5"){
$tunjanganjabatan=1000000;
$tunjangantransport=100000;
$tunjanganmakan=200000;
}
if($status="Menikah"){
$tunjanganistri=150000;
}
else{
$tunjanganistri=0;
}
$gajikotor=$tunjanganjabatan+$tunjanganistri+$tunjangantransport+$tunjanganmakan;
$pajak=(0.1*$gajikotor);
$gajibersih=($gajikotor-$pajak);

mysql_query("Update tabelpegawai set `id_pegawai`='$idpegawai',`nama_pegawai`='$namapegawai',
`jenis_kelamin`='$jeniskelamin',`status`='$status',`alamat`='$alamat',
`jabatan`='$jabatan',`tunjangan_jabatan`='$tunjanganjabatan',
`tunjangan_istri`='$tunjanganistri',`tunjangan_transport`='$tunjangantransport',
`tunjangan_makan`='$tunjanganmakan',`gaji_kotor`='$gajikotor',`pajak`='$pajak',
`gaji_bersih`='$gajibersih' where `id_pegawai`='$idpegawai'");
echo "Data Telah Diupdate";
echo "<meta http-equiv=refresh content=1;url=form_pegawai.php>";

?>