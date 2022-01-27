<?php 
if(isset($_POST['Kirim'])){
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

include "koneksi.php";
$query="insert into tabelpembayaran values ('$idpelanggan','$tahun-$bulan-$tanggal',
'$idpegawai','$idmeteran','$bebanpemakaian','$jumlahpemakaian',
'$biayapemakaian','$jumlahbiaya','$potonganbank','$totalbayar')";
$result = mysql_query ($query);

echo "<meta http-equiv=refresh content=1;url=form_pembayaran.php>";
}
?>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink" >
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM PEMBAYARAN</div></td>
      </tr>
      <tr>
        <td width="173">Id Pelanggan</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpelanggan"  maxlength="15" /></td>
      </tr>
	     <td>Tanggal Pembayaran</td>
		 <td width="26"><div align="center">:</div></td>
     <td><select name="tanggal" id="tanggal">
<option selected="selected">Tanggal</option>
<?php
for($tanggal=1; $tanggal<=31; $tanggal+=1){
    echo"<option value=$tanggal>$tanggal</option>";
}
?>
</select>
<select name="bulan" id="bulan">
<option selected="selected">Bulan</option>
<?php
$bulan=array('Januari'=>'1','Februari'=>'2','Maret'=>'3','April'=>'4','Mei'=>'5','Juni'=>'6',
'Juli'=>'7','Agustus'=>'8','September'=>'9','Oktober'=>'10','November'=>'11','Desember'=>'12');
$jlh_bln=count($bulan);
foreach($bulan as $bln => $value){
    echo"<option value='".$value."'> ".$bln." </option>";
}
?>
</select>
<select name="tahun" id="tahun">
 <option>Tahun</option>		 

		  <?php for($tahun=2016;$tahun>=1960;$tahun--){?> <option><?php echo $tahun ?></option> 
		 <?php }; 
		  ?>
		</select>
		  </label> 
        </span></td>
      </tr>
	   <tr>
        <td><span class="style14">Id Pegawai PLN</span></td>
       <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpegawai"  maxlength="15" /></td>
      </tr>
	   <tr>
        <td>Id Meteran</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idmeteran"  maxlength="15" /></td>
      </tr>
 <tr>
        <td>Beban Pemakaian</td>
        <td><div align="center">:</div></td>
        <td name="beban">
          <input type="checkbox" name="bebanpemakaian"  value="Televisi"/> Televisi
          <input type="checkbox" name="bebanpemakaian"  value="AC"/>AC
          <input type="checkbox" name="bebanpemakaian"  value="Kulkas"/>Kulkas
          <input type="checkbox" name="bebanpemakaian"  value="Setrika"/>Setrika
          <input type="checkbox" name="bebanpemakaian"  value="Mesin Cuci"/>Mesin Cuci
          <input type="checkbox" name="bebanpemakaian"  value="Mesin Air"/>Mesin Air 
		  <input type="checkbox" name="bebanpemakaian"  value="Komputer"/>Komputer
		  <input type="checkbox" name="bebanpemakaian"  value="Rice Cooker"/>Rice Cooker
		  <input type="checkbox" name="bebanpemakaian"  value="Dispenser"/>Dispenser
		  <input type="checkbox" name="bebanpemakaian"  value="Kipas Angin"/>Kipas Angin
          <input type="checkbox" name="bebanpemakaian"  value="Lampu Pijar"/>Lampu Pijar		  
          </td>
      </tr>

	  <tr>
        <td><span class="style14">Jumlah Pemakaian/kWh</span></td>
		<td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="jumlahpemakaian" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">
          <input type="submit" name="Kirim" value="Kirim" />          
          <input type="reset"  name="Batal" value="Batal" />
        </div></td>
      </tr>
    </table>
<a href="halaman_awal.php"><img width="25" align="left" src="halaman_awal.png"></a>
<a href="form_pelanggan.php"><img width="20" align="left" src="button1.png"></a>
<a href="form_pegawai.php"><img width="20" align="left" src="button2.png"></a>
<a href="form_meteran.php"><img width="20" align="left" src="button3.png"></a>
<a href="logout.php"><img width="20" align="left" src="logout1.jpg"></a>
<p></p> 

    <table width="1300" border="1" align="center" >
      <tr>
        <td colspan="25" bgcolor="#33CCFF"><div align="center">LAPORAN DATA PEMBAYARAN LISTRIK</td>
      </tr>
      <tr>
        <td width="100"><div align="center">No</div></td>
		<td width="300"><div align="center">Id Pelanggan</div></td>
		<td width="600"><div align="center">Tanggal Pembayaran</div></td>
		<td width="300"><div align="center">Id Pegawai</div></td>
		<td width="300"><div align="center">Id Meteran</div></td>
		<td width="400"><div align="center">Beban Pemakaian</div></td>
		<td width="400"><div align="center">Jumlah Pemakaian/kWh</div></td>
		<td width="400"><div align="center">Biaya Pemakaian</div></td>
		<td width="400"><div align="center">Jumlah Biaya</div></td>
		<td width="400"><div align="center">Potongan Bank</div></td>
		<td width="400"><div align="center">Total Bayar</div></td>
		<td width="400"><div align="center">Aksi</div></td>
      </tr>
	  <?php
	  include "koneksi.php";
	  $perintah="Select*from tabelpembayaran";
	  $jalan=mysql_query($perintah) or die('Error');
	  $no=1;
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idpelanggan=$data['id_pelanggan'];
	  $tanggalbayar=$data['tgl_bayar'];
	  $tanggalbayar2 = date('d-m-Y',strtotime($tanggalbayar));
	  $idpegawai=$data['id_pegawai'];
	  $idmeteran=$data['id_meteran'];
	  $bebanpemakaian=$data['beban_pemakaian'];
	  $jumlahpemakaian=$data['jumlah_pemakaian/kWh'];
	  $biayapemakaian=$data['biaya_pemakaian'];
	  $jumlahbiaya=$data['jumlah_biaya'];
	  $potonganbank=$data['potongan_bank'];
	  $totalbayar=$data['total_bayar'];
	  ?>
	     <tr>
        <td width="100"><div align="center"><?php  echo "$no";?></td>
		<td width="300"><div align="center"><?php echo "$idpelanggan"; ?></td>
		<td width="600"><div align="center"><?php echo "$tanggalbayar2"; ?></td>
		<td width="300"><div align="center"><?php echo "$idpegawai";?></td>
		<td width="300"><div align="center"><?php echo "$idmeteran"; ?></td>
		<td width="400"><div align="center"><?php echo "$bebanpemakaian"; ?></td>
		<td width="400"><div align="center"><?php echo "$jumlahpemakaian"; ?></td>
		<td width="400"><div align="center"><?php echo "$biayapemakaian"; ?></td>
		<td width="400"><div align="center"><?php echo "$jumlahbiaya"; ?></td>
		<td width="400"><div align="center"><?php echo "$potonganbank"; ?></td>
		<td width="400"><div align="center"><?php echo "$totalbayar"; ?></td>
		<td width="400"><div align="center"><a href="delete_pembayaran.php?id=<?php 
		echo "$idpelanggan";?>"><meta name="viewport" ><img width="25" src="close.png"></a> 
		<a href="form_update_pembayaran.php?idpelanggan=<?php 
		echo "$idpelanggan";?>"><img width="25" src="update.jpg"></a></td>	
      </tr>
	<?php $no=$no+1;}?>  
    </table>
</form>
</body>
</html>





