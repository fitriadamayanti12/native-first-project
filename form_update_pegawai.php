<?php
	  include "koneksi.php";
	  
	  $idpegawai=$_GET['idpegawai'];
	  $perintah="Select `id_pegawai`,`nama_pegawai`,`jenis_kelamin`,`status`,
	  `alamat`,`jabatan`,`tunjangan_jabatan`,`tunjangan_istri`,`tunjangan_transport`,
	  `tunjangan_makan`,`gaji_kotor`,`pajak`,`gaji_bersih` 
	  from tabelpegawai where id_pegawai='$idpegawai'";
	  $hasil = mysql_query($perintah);
	  $jalan=mysql_query($perintah) or die('Error');
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idpegawai=$data['id_pegawai'];
	  $namapegawai=$data['nama_pegawai'];
	  $jeniskelamin=$data['jenis_kelamin'];
	  $status=$data['status'];
	  $alamat=$data['alamat'];
	  $jabatan= $data['jabatan'];
	  $tunjanganjabatan= $data['tunjangan_jabatan'];
	  $tunjanganistri= $data['tunjangan_istri'];
	  $tunjangantransport= $data['tunjangan_transport'];
	  $tunjanganmakan= $data['tunjangan_makan'];
	  $gajikotor= $data['gaji_kotor'];
	  $pajak= $data['pajak'];
	  $gajibersih= $data['gaji_bersih'];
	  }
	  ?>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="update_pegawai.php">
  
    <table width="900" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM PEGAWAI PLN</div></td>
      </tr>
      <tr>
        <td width="173">Id Pegawai</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpegawai"  maxlength="15" value="<?php echo "$idpegawai"; ?>" readonly /></td>
      </tr>
	     <td>Nama Pegawai</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield2"></label>
        <input type="text" name="namapegawai"  maxlength="30" value="<?php echo "$namapegawai"; ?>" /></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><div align="center">:</div></td>
        <td> <input type="radio" name="jeniskelamin"  value="L"/>Laki-laki
          <input type="radio" name="jeniskelamin"  value="P"/>Perempuan
        </td>
      </tr>
      <tr>
        <td>Status</td>
        <td><div align="center">:</div></td>
        <td><select name="status" id="select">
          <?php 
		  $status = array ('Menikah'=>'M','Belum Menikah'=>'BM');
		  foreach($status as $t => $value)
		 {
		 echo "<option value = '".$value."'>".$t."</option>";
		 }
		 ?>
        </select></td>
      </tr>
      <tr>
        <td>Alamat</td>
       <td><div align="center">:</div></td>
         <td><label for="textarea" width="1000" height="1000" ></label>
		<textarea name="alamat"  ></textarea>
      </tr>
      <tr>
      <tr>
        <td>Jabatan</td>
        <td><div align="center">:</div></td>
        <td><select name="jabatan" id="select2">
          <?php
		  $jabatan = array('Pilih','Admin 1','Admin 2','Admin 3','Admin 4','Admin 5');
		  for ($j=0; $j<=5; $j++)
		  {
			  echo "<option value='".$jabatan[$j]."'>".strtoupper($jabatan[$j])."
			  </option>";
		  }
		  ?>
        </select></td>
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
	