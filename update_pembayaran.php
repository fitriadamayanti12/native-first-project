<?php 
include "koneksi.php";
$idpelanggan=$_POST['idpelanggan'];
$tanggal=$_POST['tanggal'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$idpegawai=$_POST['idpegawai'];
$idmeteran=$_POST['idmeteran'];
$bebanpemakaian=$_POST['bebanpemakaian'];
$jumlahpemakaian=$_POST['jumlahpemakaian'];

if($bebanpemakaian="AC"){
$biayapemakaian=15000;
}
else if($bebanpemakaian="Televisi"){
$biayapemakaian=10000;
}
else if($bebanpemakaian="Kulkas"){
$biayapemakaian=10000;
}
else if($bebanpemakaian="Setrika"){
$biayapemakaian=5000;
}
else if($bebanpemakaian="Mesin Cuci"){
$biayapemakaian=7000;
}
else if($bebanpemakaian="Mesin Air"){
$biayapemakaian=8000;
}
else if($bebanpemakaian="Komputer"){
$biayapemakaian=4000;
}
else if($bebanpemakaian="Rice Cooker"){
$biayapemakaian=2000;
}
else if($bebanpemakaian="Dispenser"){
$biayapemakaian=3000;
}
else if($bebanpemakaian="Kipas Angin"){
$biayapemakaian=3500;
}
else if($bebanpemakaian="Lampu Pijar"){
$biayapemakaian=2500;
}
else{
$biayapemakaian=0;
}
$jumlahbiaya=$biayapemakaian*$jumlahpemakaian;
$potonganbank=0.025*$jumlahbiaya;
$totalbayar=$jumlahbiaya+$potonganbank;

mysql_query("Update tabelpembayaran set `id_pelanggan`='$idpelanggan',
`tgl_bayar`='$tahun-$bulan-$tanggal',`id_pegawai`='$idpegawai',`id_meteran`='$idmeteran',
`beban_pemakaian`='$bebanpemakaian',`jumlah_pemakaian/kWh`='$jumlahpemakaian',
`biaya_pemakaian`='$biayapemakaian',`jumlah_biaya`='$jumlahbiaya',
`potongan_bank`='$potonganbank',`total_bayar`='$totalbayar'
where `id_pelanggan`='$idpelanggan'");
echo "Data Telah Diupdate";
echo "<meta http-equiv=refresh content=1;url=form_pembayaran.php>";

?>