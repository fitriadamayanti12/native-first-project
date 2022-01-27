<?php
	  include "koneksi.php";
	  
	  $idpelanggan=$_GET['idpelanggan'];
	  $perintah="Select `id_pelanggan`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`umur`,`pekerjaan`,`alamat`,
	  `no_hp` from tabelpelanggan where id_pelanggan='$idpelanggan'";
	  $hasil = mysql_query($perintah);
	  $jalan=mysql_query($perintah) or die('Error');
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
	  }
	  ?>
<head>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="Update.php">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM PELANGGAN</div></td>
      </tr>
      <tr>
        <td width="173">Id Pelanggan</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpelanggan"  maxlength="15" value="<?php echo "$idpelanggan"; ?>" readonly /></td>
      </tr>
	     <td>Nama</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield2"></label>
        <input type="text" name="nama"  maxlength="30" value="<?php echo "$nama"; ?>" /></td>
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
	</form>
	</body>
	