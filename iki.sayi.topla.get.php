<!DOCTYPE html>
<html>
<body>

<h2>2 SAYI TOPLAMA</h2>
<?php
  if(!isset($_GET["sayi1"])){?>

<form action="" method="get">

  1.Sayıyı giriniz:
  <input type="text" name="sayi1" placeholder="sayi giriniz">
  <br><br>
  2.Sayiyi giriniz:
  <input type="text" name="sayi2"  placeholder="sayi giriniz">
  <br><br>

  <input type="submit" value="Gönder">

</form>

<p>Gönder butonuna basarak iki sayıyı toplayabilirsin.</p>
<?php } //if(isset($_GET["sayi1"])){ ?>


<?php
    if(isset($_GET["sayi1"])){
      $A=$_GET["sayi1"];
      $B=$_GET["sayi2"];
      $sonuc=$A+$B;
      echo " <h1>Sonuc : $A+$B=$sonuc </h1>" . "<a href='?'>Yeni işlem</a>";

    }
 ?>



</body>
</html>
