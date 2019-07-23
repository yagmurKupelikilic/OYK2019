<h1>Kişiler Dosyasından okunan kişiler</h1>

<?php
/*
$str="Hasan;Çiçek;İstanbul";
$arr =explode(";", $str);
echo "ADI: " . $arr[0]. "<br />";
echo "SOYADI: " . $arr[1]. "<br />";
echo "ŞEHİR: " . $arr[2]. "<br />";
//die("bitti..");
echo "<hr/>"; ///ögrenme bitti....
*/
?>

<table border=1; cellspacing=0; cellpadding=5;>
  <tr>
    <td>ADI</td>
    <td>SOYADI</td>
    <td>ŞEHİR</td>
  </tr>
  <?php
  $dosya="kisiler.txt";

  $arrKisiler = file($dosya);
  foreach ($arrKisiler as $key => $value) {
    $Kisi=$value;
    $arrKisi = explode(";", $Kisi);
    $list($AD, $SOYAD, $SEHIR) = explode(";", $Kisi);
    echo " <tr>
    <td>$AD</td>
    <td>$SOYAD</td>
    <td>$SEHIR</td>
      </tr>";

  }


?>
</table>
