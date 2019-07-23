<!DOCTYPE html>
<html>
<body>

  <?php
    if(!isset($_GET["sayi1"])){  ?>

  <form action="" method="get">

  1.Sayıyı giriniz:
  <input type="text" name="sayi1" placeholder="sayi giriniz">
  <br><br>
  2.Sayiyi giriniz:
  <input type="text" name="sayi2"  placeholder="sayi giriniz">
  <br><br>
  3.Sayiyi giriniz:
  <input type="text" name="sayi3"  placeholder="sayi giriniz">

  <br><br>
  <input type="submit" value="Gönder">

  <p>Gönder butonuna basarak üç sayıyı çarpabilirsiniz.</p>

</form>
<?php } //if(isset($_GET["sayi1"])){ ?>

<?php
    if(isset($_GET["sayi1"])){
      $A=$_GET["sayi1"];
      $B=$_GET["sayi2"];
      $C=$_GET["sayi3"];
      $sonuc=$A*$B*$C;
      echo " <h1>Sonuc : $A*$B*$C=$sonuc </h1>" . "<a href='?'>Yeni işlem</a>";

    }
 ?>


</body>
</html>
