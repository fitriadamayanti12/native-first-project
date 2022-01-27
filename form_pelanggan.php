<?php 
if(isset($_POST['Kirim'])){
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


include "koneksi.php";
$query="insert into tabelpelanggan values ('$idpelanggan','$nama','$jeniskelamin','$tempat','$tahun-$bulan-$tanggal','$umur','$pekerjaan','$alamat','$nohp')";
$result = mysql_query ($query);

echo "<meta http-equiv=refresh content=1;url=form_pelanggan.php>";
}

?>

<head>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM PELANGGAN</div></td>
      </tr>
      <tr>
        <td width="173">Id Pelanggan</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpelanggan"  maxlength="15" /></td>
      </tr>
	     <td>Nama</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield2"></label>
        <input type="text" name="nama"  maxlength="30" /></td>
      </tr>
	   <tr>
        <td>Jenis Kelamin</td>
        <td><div align="center">:</div></td>
        <td> <input type="radio" name="jeniskelamin"  value="L"/>Laki-laki
          <input type="radio" name="jeniskelamin"  value="P"/>Perempuan
        </td>
      </tr>
	  <tr>
	    <td>TTL</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield3"></label>
        <input type="text" name="tempat" />
		<select name="tanggal" id="tanggal">
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
  <?php error_reporting(1); ?>
		  <select name="tahun" id="tahun" onchange="document.getElementById('umur').value=2016-this.options[this.selectedIndex].text">
 <option>Tahun</option>		 

		  <?php for($tahun=2016;$tahun>=1960;$tahun--){?> <option><?php echo $tahun ?></option> 
		 <?php }; 
		  ?>
		</select>
		  </label> 
        </span></td>
      </tr>
      <tr>
        <td><span class="style14">Umur</span></td>
        <td><span class="style14">:</span></td>
        <td><span class="style13">
          <label>
          <input type="text" name="umur" id="umur" size="5" value="<?php echo "$umur"; ?>" readonly />
          </label>
        </span></td>
      </tr>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><div align="center">:</div></td>
        <td><select name="pekerjaan" id="select">
          <?php
		  $pekerjaan = array('Pilih','PNS','TNI','Polisi','Petani','Pedagang','Pengusaha','Dokter',
		  'Guru','Pilot','Dosen','Buruh','Mahasiswa','Lainnya');
		  for ($p=0; $p<=13; $p++)
		  {
			  echo "<option value='".$pekerjaan[$p]."'>".strtoupper($pekerjaan[$p])."
			  </option>";
		  }
		  ?>
        </select></td>
      </tr>
     <tr>
	    <td>Alamat</td>
        <td><div align="center">:</div></td>
        <td><label for="textarea" width="1000" height="1000" ></label>
		<textarea name="alamat"  ></textarea>
		</td>
      </tr>
      <tr>
        <td>No.HP</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield2"></label>
        <input type="text" name="nohp"  maxlength="12" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">
          <input type="submit" name="Kirim" value="Kirim" />          
          <input type="reset" name="Batal" value="Batal" />
        </div></td>
      </tr>
    </table>
	<a href="halaman_awal.php"><img width="25" align="left" src="halaman_awal.png"></a>
<a href="form_pembayaran.php"><img width="20" align="left" src="button1.png"></a>
<a href="form_pegawai.php"><img width="20" align="left" src="button2.png"></a>
<a href="form_meteran.php"><img width="20" align="left" src="button3.png"></a>
<a href="logout.php"><img width="20" align="left" src="logout1.jpg"></a>
 <p></p> 

    <table width="1100" border="1" align="center" >
      <tr>
        <td colspan="10" bgcolor="#33CCFF"><div align="center">LAPORAN DATA PELANGGAN</td>
      </tr>
      <tr>
        <td width="100"><div align="center">No</div></td>
		<td width="100"><div align="center">Id Pelanggan</div></td>
		<td width="700"><div align="center">Nama</div></td>
		<td width="700"><div align="center">Jenis Kelamin</div></td>
		<td width="900"><div align="center">TTL</div></td>
		<td width="100"><div align="center">Umur</div></td>
		<td width="100"><div align="center">Pekerjaan</div></td>
		<td width="500"><div align="center">Alamat</div></td>
		<td width="100"><div align="center">No.HP</div></td>
		<td width="100"><div align="center">Aksi</div></td>
      </tr>
	  <?php
	  include "koneksi.php";
	  $perintah="Select*from tabelpelanggan";
	  $jalan=mysql_query($perintah) or die('Error');
	  $no=1;
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idpelanggan=$data['id_pelanggan'];
	  $nama=$data['nama'];
	  $jeniskelamin=$data['jenis_kelamin'];
	  $tempat=$data['tempat_lahir'];
	  $tanggal=$data['tanggal_lahir'];
	  $tanggal2 = date('d-m-Y',strtotime($tanggal));
	  $umur=$data['umur'];
	  $pekerjaan=$data['pekerjaan'];
	  $alamat=$data['alamat'];
	  $nohp=$data['no_hp'];
	  ?>
	  
	   <tr>
        <td width="100"><div align="center"><?php  echo "$no";?></td>
		<td width="100"><div align="center"><?php echo "$idpelanggan"; ?></td>
		<td width="700"><div align="center"><?php echo "$nama"; ?></td>
		<td width="700"><div align="center"><?php echo "$jeniskelamin"; ?></td>
		<td width="900"><div align="center"><?php echo "$tempat/$tanggal2";?></td>
		<td width="100"><div align="center"><?php echo "$umur"; ?></td>
		<td width="100"><div align="center"><?php echo "$pekerjaan"; ?></td>
		<td width="500"><div align="center"><?php echo "$alamat"; ?></td>
		<td width="100"><div align="center"><?php echo "$nohp"; ?></td>
		<td width="300"><div align="center"><a href="Delete.php?id=<?php 
		echo "$idpelanggan";?>"><meta name="viewport" ><img width="25" src="close.png"></a> 
		<a href="Form_update.php?idpelanggan=<?php 
		echo "$idpelanggan";?>"><img width="25" src="update.jpg"></a></td>	
      </tr>
	
	<?php $no=$no+1;}?>
	 
	
	  
    </table>
	

 </form> 
</body>
</html>




