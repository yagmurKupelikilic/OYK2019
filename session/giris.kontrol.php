<?php
@session_start();
  if($_SESSION[giris_basarili] <> 1) die("Yetkili değilsiniz.. <a href='index.php'>Giriş yap</a>");
?>
<a href="sorular.php">Geri Dön</a>
<a href="oturumu.kapat.php">Oturumu Kapat</a>
