<?php
	  include "koneksi.php";
	  
	  $idpembeli=$_GET['idpembeli'];
	  $perintah="Select `id_pembeli`,`id_karyawan`,`id_tanaman`,
	  `jenis_tanaman`,`tanaman`,`harga`,`jumlah_beli`,`jumlah_bayar`,
	  `diskon`,`total_bayar` from transaksi where id_pembeli='$idpembeli'";
	  $hasil = mysql_query($perintah);
	  $jalan=mysql_query($perintah) or die('Error');
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idpembeli=$data['id_pembeli'];
	  $idkaryawan=$data['id_karyawan'];
	  $idtanaman=$data['id_tanaman'];
	  $jenistanaman=$data['jenis_tanaman'];
	  $tanaman=$data['tanaman'];
	  $harga=$data['harga'];
	  $jumlahbeli=$data['jumlah_beli'];
	  $jumlahbayar=$data['jumlah_bayar'];
	  $diskon=$data['diskon'];
	  $totalbayar=$data['total_bayar'];
	  }
	  ?>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="update_pembayaran.php">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink" >
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM TRANSAKSI</div></td>
      </tr>
      <tr>
        <td width="173">Id Pembeli</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpembeli"  maxlength="15"  value="<?php echo "$idpembeli"; ?>" readonly /></td>
      </tr>
	   <tr>
        <td><span class="style14">Id Karyawan</span></td>
       <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idkaryawan"  maxlength="15" value="<?php echo "$idkaryawan"; ?>" /></td>
      </tr>
	   <tr>
        <td>Id Tanaman</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idtanaman"  maxlength="15" value="<?php echo "$idtanaman"; ?>" /></td>
      </tr>
 <tr>
        <td>Jenis Tanaman</td>
        <td><div align="center">:</div></td>
         <td name="tanaman">
		  <input type="checkbox" name="tanaman[]"  value="Jagung"/>Jagung
          <input type="checkbox" name="tanaman[]"  value="Cabe"/>Cabe
          <input type="checkbox" name="tanaman[]"  value="Wortel"/>Wortel
          <input type="checkbox" name="tanaman[]"  value="Terong"/>Terong
          <input type="checkbox" name="tanaman[]"  value="Pepaya"/>Pepaya
          <input type="checkbox" name="tanaman[]"  value="Kacang"/>Kacang </br>
		  <input type="checkbox" name="tanaman[]"  value="Mawar"/>Mawar
		  <input type="checkbox" name="tanaman[]"  value="Kamboja"/>Kamboja
		  <input type="checkbox" name="tanaman[]"  value="Melati"/>Melati
		  <input type="checkbox" name="tanaman[]"  value="Bugenvil"/>Bugenvil
          <input type="checkbox" name="tanaman[]"  value="Jeruk"/>Jeruk
		  <input type="checkbox" name="tanaman[]"  value="Apel"/>Apel </br>
		  <input type="checkbox" name="tanaman[]"  value="Mangga"/>Mangga
          </td>
      </tr>

	  <tr>
        <td><span class="style14">Jumlah Beli</span></td>
		<td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="jumlahbeli" value="<?php echo "$jumlahbeli"; ?>" /></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">
          <input type="submit" name="Kirim" value="Kirim" />          
          <input type="reset"  name="Batal" value="Batal" />
        </div></td>
      </tr>
    </table>
	</form>
	</body>
	