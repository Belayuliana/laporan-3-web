<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Tugas Pendahuluan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 15px Montserrat, sans-serif;
    line-height: 1.8;
    color: #000;
  }
  .error {color: #FF0000;}
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color:;
  }
 
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color:;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: ;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
    background-color: #1abc9c;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bela</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Array</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
  </div>
</nav>

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
<!-- Footer -->

</body>
<footer class="container-fluid bg-4 text-center">
  <p>Yuliana Isabela <br> 60900117034<br>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>
</html>
