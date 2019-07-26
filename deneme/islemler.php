<h1>iki sayıyı database'e gönderme</h1>
<?php
include("db.php");
if (isset( $_POST["sayi1"] )) {  // Form POST edilmiş...
  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
        deneme
      SET
        sayi1  = '%s',
        sayi2  = '%s'",
  $_POST["sayi1"], $_POST["sayi2"]);
  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);
  echo "<h4>Kayıt başarıyla eklendi</h4>";
  echo"<a href='show.php'>Listelemek için tıklayınız..</a>";
}  // Form POST edilmiş...
?>


<form method="post">
  1.Sayıyı giriniz:
  <input type="text" name="sayi1" placeholder="sayi giriniz">
  <br><br>
  2.Sayiyi giriniz:
  <input type="text" name="sayi2"  placeholder="sayi giriniz">
  <br><br>

  <input type="submit" value="Gönder">

</form>
