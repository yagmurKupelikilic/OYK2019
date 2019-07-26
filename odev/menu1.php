<?php
@session_start();

if($_SESSION["giris_basarili"] <> 1 ){
  header("location: login.php");
  die();
}
if($_SESSION["yetki"] <> 1 ){
  require("yetkili.degilsiniz.php");
  die();
}
echo "<h1>Menu 1</h1><p>Hoşgeldin</p>" . $_SESSION['kullanici_adi'] . "<br />";
echo " <a href='login.php'>Log</a><br />";
echo "<a href='oturumu.kapat.php'>oturumu kapat</a>";
?>
