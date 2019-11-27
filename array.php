<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
 include 'fix.php';
 ?>

<form method="get" name="frm" action="">
  <table>
  <tr>
    <td>
      <p>Masukkan Jumlah</p>
    </td>

    <td>
      <input name="jumlah" type="text" />
    </td>
    <td>
      <input type="submit" name="btnJumlah" value="Ok" />
    </td>
  </tr>
  </form>
  </table>
<form method="post" name="frmpost" action="prak3.php">

  <table width="547" border="0" cellpadding="0" cellspacing="0">

  <tr>

  <td width="32" height="22" valign="top">No</td>

  <td width="114" valign="top">NIM</td>

  <td width="240" valign="top">Nama</td>

  <td width="161" valign="top">Alamat</td>

  <td width="10" valign="top">Kelas</td>

  <td width="10" valign="top">Jam</td>

  </tr>

  <?php

  if(isset($_GET['jumlah']) && $_GET['jumlah']>0){

  $jumlah_form = $_GET['jumlah'];

  }

  else{

  $jumlah_form = 1;

  }

  for($i=1; $i<=$jumlah_form; $i++){

  ?>

  <tr>

  <td height="23"><?php echo $i; ?></td>

  <td><input type="text" name="nim[]" size="30"></td>

  <td><input type="text" name="nama[]" size="30"></td>

  <td><input type="text" name="alamat[]" size="30"></td>

  <td><input type="text" name="kelas[]" size="10"></td>

  <td><input type="text" name="jam[]" size="10"></td>



  </tr>

  <?php

  }

  ?>

  <tr>

  <td height="23" colspan="6" align="right"><input type="submit" name="Ok" value="Simpan" /></td>

  </tr>

  </table>

  </form>
</body>
</html>