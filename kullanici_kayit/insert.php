<?php
include("db.php");

if (isset( $_POST["adi"] )) {  // Form POST edilmiş...

  // Önce EKLEME için SQL hazırlayalım...
  $SQL = sprintf("
      INSERT INTO
      kullanicilar
      SET
        adi    = '%s',
        soyadi = '%s',
        parola  = '%s'  ",
  $_POST["adi"], $_POST["soyadi"], $_POST["parola"], $_POST["tur"]);

  // SQL komutunu MySQL veritabanı üzerinde çalıştır!
  $rows  = mysqli_query($db, $SQL);

  echo "<h4>Kayıt eklendi...</h4>";

}  // Form POST edilmiş...

?>


<h1>Kayıt Ekleme</h1>

<form method="post">
  Adı:<input type="text" name="adi">
  <br /><br />
  Soyadı:<input type="text" name="soyadi">
  <br /><br />
  Parola:<input type="password" name="parola">
  <br /><br />
  Tür:<select name="tur">
        <option value="m">Male</option>
        <option value="f">Female</option>
      </select>
  <br /><br />
  <input type="submit" name="" value="Kayıt Ekle (insert)">
</form>
