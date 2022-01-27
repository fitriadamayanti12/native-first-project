<?php 
if(isset($_POST['Kirim'])){
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

include "koneksi.php";
$query="insert into tabelpegawai values ('$idpegawai','$namapegawai','$jeniskelamin',
'$status','$alamat','$jabatan','$tunjanganjabatan','$tunjanganistri','$tunjangantransport',
'$tunjanganmakan','$gajikotor','$pajak','$gajibersih')";
$result = mysql_query ($query);

echo "<meta http-equiv=refresh content=1;url=form_pegawai.php>";
}

?>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="">
  
    <table width="600" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM PEGAWAI PLN</div></td>
      </tr>
      <tr>
        <td width="173">Id Pegawai</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idpegawai"  maxlength="15" /></td>
      </tr>
	     <td>Nama Pegawai</td>
        <td><div align="center">:</div></td>
        <td><label for="textfield2"></label>
        <input type="text" name="namapegawai"  maxlength="30" /></td>
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
			  echo "<option value='".$jabatan[$j]."'>".($jabatan[$j])."
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
	<a href="halaman_awal.php"><img width="25" align="left" src="halaman_awal.png"></a>
<a href="form_pembayaran.php"><img width="20" align="left" src="button1.png"></a>
<a href="form_pelanggan.php"><img width="20" align="left" src="button2.png"></a>
<a href="form_meteran.php"><img width="20" align="left" src="button3.png"></a>
<a href="logout.php"><img width="20" align="left" src="logout1.jpg"></a>
 <p></p> 

    <table width="1300" border="1" align="center" >
      <tr>
        <td colspan="25" bgcolor="#33CCFF"><div align="center">LAPORAN DATA PEGAWAI PLN</td>
      </tr>
      <tr>
        <td width="100"><div align="center">No</div></td>
		<td width="100"><div align="center">Id Pegawai</div></td>
		<td width="600"><div align="center">Nama Pegawai</div></td>
		<td width="500"><div align="center">Jenis Kelamin</div></td>
		<td width="100"><div align="center">Status</div></td>
		<td width="700"><div align="center">Alamat</div></td>
		<td width="200"><div align="center">Jabatan</div></td>
		<td width="400"><div align="center">Tunjangan Jabatan</div></td>
		<td width="400"><div align="center">Tunjangan Istri</div></td>
		<td width="400"><div align="center">Tunjangan Transport</div></td>
		<td width="400"><div align="center">Tunjangan Makan</div></td>
		<td width="400"><div align="center">Gaji Kotor</div></td>
		<td width="400"><div align="center">Pajak</div></td>
		<td width="400"><div align="center">Gaji Bersih</div></td>
		<td width="400"><div align="center">Aksi</div></td>
      </tr>
	  <?php
	  include "koneksi.php";
	  $perintah="Select*from tabelpegawai";
	  $jalan=mysql_query($perintah) or die('Error');
	  $no=1;
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idpegawai=$data['id_pegawai'];
	  $namapegawai=$data['nama_pegawai'];
	  $jeniskelamin=$data['jenis_kelamin'];
	  $status=$data['status'];
	  $alamat=$data['alamat'];
	  $jabatan=$data['jabatan'];
	  $tunjanganjabatan=$data['tunjangan_jabatan'];
	  $tunjanganistri=$data['tunjangan_istri'];
	  $tunjangantransport=$data['tunjangan_transport'];
	  $tunjanganmakan=$data['tunjangan_makan'];
	  $gajikotor=$data['gaji_kotor'];
	  $pajak=$data['pajak'];
	  $gajibersih=$data['gaji_bersih'];
	  
	  ?>
	  
	   <tr>
        <td width="100"><div align="center"><?php  echo "$no";?></td>
		<td width="100"><div align="center"><?php echo "$idpegawai"; ?></td>
		<td width="600"><div align="center"><?php echo "$namapegawai"; ?></td>
		<td width="600"><div align="center"><?php echo "$jeniskelamin"; ?></td>
		<td width="100"><div align="center"><?php echo "$status";?></td>
		<td width="700"><div align="center"><?php echo "$alamat"; ?></td>
		<td width="200"><div align="center"><?php echo "$jabatan"; ?></td>
		<td width="400"><div align="center"><?php echo "$tunjanganjabatan"; ?></td>
		<td width="400"><div align="center"><?php echo "$tunjanganistri"; ?></td>
		<td width="400"><div align="center"><?php echo "$tunjangantransport"; ?></td>
		<td width="400"><div align="center"><?php echo "$tunjanganmakan"; ?></td>
		<td width="400"><div align="center"><?php echo "$gajikotor"; ?></td>
		<td width="400"><div align="center"><?php echo "$pajak"; ?></td>
		<td width="400"><div align="center"><?php echo "$gajibersih"; ?></td>
		<td width="400"><div align="center"><a href="delete_pegawai.php?id=<?php 
		echo "$idpegawai";?>"><meta name="viewport" ><img width="25" src="close.png"></a> 
		<a href="form_update_pegawai.php?idpegawai=<?php 
		echo "$idpegawai";?>"><img width="25" src="update.jpg"></a></td>	
      </tr>
	
	<?php $no=$no+1;}?>
	 
	
	  
    </table>
	

 </form> 
</body>
</html>




