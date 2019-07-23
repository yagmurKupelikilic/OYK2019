<h1>Sözler Dosyadan</h1>

<?php

$dosya= "sozler.txt";



echo "<h2>file Komutu Çıktısı:</h2>";

$dosya_icerigi= file($dosya);

foreach ($dosya_icerigi as $key => $value) {
  echo "$key elemanın degeri: <b>$value</b> <br />";
}

 ?>
