<?php 
if(isset($_POST['Kirim'])){
$idmeteran=$_POST['idmeteran'];
$tarifdaya=$_POST['tarifdaya'];
$spln=$_POST['spln'];

include "koneksi.php";
$query="insert into tabelmeteran values ('$idmeteran','$tarifdaya','$spln')";
$result = mysql_query ($query);

echo "<meta http-equiv=refresh content=1;url=form_meteran.php>";
}

?>

</head>

<body background="5.jpg">
<form id="form1" name="form1" method="post" action="">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM METERAN</div></td>
      </tr>
      <tr>
        <td width="173">Id Meteran</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idmeteran"  maxlength="15" /></td>
      </tr>
	  <tr>
	     <td>Tarif/Daya</td>
         <td><div align="center">:</div></td>
        <td><select name="tarifdaya" id="select2">
          <?php
		  $tarifdaya = array('Pilih','900VA','1300VA','2200VA','3500VA','660VA');
		  for ($t=0; $t<=5; $t++)
		  {
			  echo "<option value='".$tarifdaya[$t]."'>".strtoupper($tarifdaya[$t])."
			  </option>";
		  }
		  ?>
        </select></td>
      </tr>
	   <tr>
	     <td>SPLN</td>
         <td><div align="center">:</div></td>
        <td><select name="spln" id="select2">
          <?php
		  $spln = array('Pilih','D3.005-1:2008','D4.006-1:2009','D5.007-1:2010','D6.008-1:2011',
		  'D7.009-1:2012','D8.010-1:2013','D9.011-1:2014','D10.012-1:2015','D11.013-1:2016');
		  for ($s=0; $s<=9; $s++)
		  {
			  echo "<option value='".$spln[$s]."'>".strtoupper($spln[$s])."
			  </option>";
		  }
		  ?>
        </select></td>
      </tr>
	 
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">
          <input type="submit" name="Kirim" value="Kirim" />          
          <input type="reset" name="Batal" value="Bersih" />
        </div></td>
      </tr>
    </table>
	<a href="halaman_awal.php"><img width="25" align="left" src="halaman_awal.png"></a>
<a href="form_pembayaran.php"><img width="20" align="left" src="button1.png"></a>
<a href="form_pelanggan.php"><img width="20" align="left" src="button2.png"></a>
<a href="form_pegawai.php"><img width="20" align="left" src="button3.png"></a>
<a href="logout.php"><img width="20" align="left" src="logout1.jpg"></a>

 <p></p> 
 <p></p> 
<table width="800" border="1" align="center">
      <tr>
        <td colspan="10" bgcolor="#33CCFF"><div align="center">LAPORAN DATA METERAN</td>
      </tr>
      <tr>
        <td width="100"><div align="center">No</div></td>
		<td width="500"><div align="center">Id Meteran</div></td>
		<td width="500"><div align="center">Tarif/Daya</div></td>
		<td width="600"><div align="center">SPLN</div></td>
		<td width="300"><div align="center">Aksi</div></td>
      </tr>
	  <?php
	  include "koneksi.php";
	  $perintah="Select*from tabelmeteran";
	  $jalan=mysql_query($perintah) or die('Error');
	  $no=1;
	  while($data=mysql_fetch_array($jalan))
	  {
	  $idmeteran=$data['id_meteran'];
	  $tarifdaya=$data['tarif_daya'];
	  $spln=$data['spln'];
	  
	  ?>
	  
	   <tr>
        <td width="100"><div align="center"><?php  echo "$no";?></td>
		<td width="500"><div align="center"><?php echo "$idmeteran"; ?></td>
		<td width="500"><div align="center"><?php echo "$tarifdaya"; ?></td>
		<td width="600"><div align="center"><?php echo "$spln"; ?></td>
		<td width="300"><div align="center"><a href="delete_meteran.php?id=<?php 
		echo "$idmeteran";?>"><meta name="viewport" ><img width="25" src="close.png"></a> 
		<a href="form_update_meteran.php?idmeteran=<?php 
		echo "$idmeteran";?>"><img width="25" src="update.jpg"></a></td>	
      </tr>
	
		<?php $no=$no+1;}?>
	</table>
  
</form>

</body>
</html>