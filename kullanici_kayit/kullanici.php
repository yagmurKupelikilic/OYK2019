<h1>Kayıt Liste</h1>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>ADI</td>
    <td>SOYADI</td>
    <td>Parola</td>
    <td>Tür</td>

  </tr>
  <?php
  $SQL   = "SELECT id, adi, soyadi, parola, tur FROM kullanicilar";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>
          <td>%s</td>

        </tr>",
        $row["adi"], $row["soyadi"], $row["parola"], $row["tur"]  );
  }

  ?>
</table>
