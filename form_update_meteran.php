<?php
	  include "koneksi.php";
	  $idmeteran=$_GET['idmeteran'];
	  $perintah="Select `id_meteran`,`tarif_daya`,`spln` 
	  from tabelmeteran where id_meteran='$idmeteran'";
	  $hasil = mysql_query($perintah);
	  $jalan=mysql_query($perintah) or die('Error');
	  while($data=mysql_fetch_array($jalan))
	  {
	 $idmeteran=$data['id_meteran'];
	  $tarifdaya=$data['tarif_daya'];
	  $spln=$data['spln'];
	  }
	  ?>
<head>
<body background="5.jpg">
<form id="form1" name="form1" method="post" action="update_meteran.php">
  
    <table width="700" border="1" align="center" cellspacing="8" bgcolor="pink">
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">FORM METERAN</div></td>
      </tr>
      <tr>
        <td width="173">Id Meteran</td>
        <td width="26"><div align="center">:</div></td>
        <td width="511"><label for="textfield"></label>
        <input type="text" name="idmeteran"  maxlength="15" value="<?php echo "$idmeteran"; ?>" readonly /></td>
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
</form>
</body>
