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

<?php
  // include 'header.php';

  if(isset($_POST['Ok'])){

  $nim = $_POST['nim'];
  $nama= $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kelas = $_POST['kelas'];
  $jam = $_POST['jam'];

  for ($i=0; $i < count($_POST['nim']) ; $i++) { 
    echo "Nim : ".$nim[$i].'<br>';
    echo "Nama : ".$nama[$i].'<br>';
    echo "Alamat : ".$alamat[$i].'<br>';
    echo "Kelas : ".$kelas[$i].'<br>';
    echo "jam : ".$jam[$i].'<br>';

  }
  ?>
  <form method="post">
  <input type="text" name="search">
  <input type="submit" name="cari">
  <?php
 for ($n=0; $n < count($nim) ; $n++) { 
   ?>
   <input type="hidden" name="arrNama[]" value="<?= $nama[$n]?>">
   <input type="hidden" name="arrNim[]" value="<?= $nim[$n]?>">
   <input type="hidden" name="arrAlamat[]" value="<?= $alamat[$n]?>">
   <input type="hidden" name="arrKelas[]" value="<?= $kelas[$n]?>">
   <input type="hidden" name="arrJam[]" value="<?= $jam[$n]?>">

  <?php

}
}
?>

</form>

<?php
  if (isset($_POST['cari'])) {
    $arrNim = $_POST['arrNim'];
    $arrNama = $_POST['arrNama'];
    $arrAlamat = $_POST['arrAlamat'];
    $arrKelas = $_POST['arrNama'];
    $arrJam = $_POST['arrJam'];

    for ($c=0; $c < count($arrNim); $c++) { 
      if($arrNim[$c] == $_POST['search']){
        echo "Nim: ". $arrNim[$c]. '<br>';
        echo "Nama: ". $arrNama[$c]. '<br>';
        echo "Alamat: ". $arrAlamat[$c]. '<br>';
        echo "Kelas: ". $arrKelas[$c]. '<br>';
        echo "jam: ". $arrJam[$c]. '<br>';
      }
    }
  }
?>

</body>
<footer class="container-fluid bg-4 text-center">
  <p>Yuliana Isabela <br> 60900117034<br>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>
</html>