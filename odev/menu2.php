<?php
@session_start();

if($_SESSION["giris_basarili"] <> 1 ){
  header("location: login.php");
  die();
}
if($_SESSION["yetki"] <> 2 ){
  require("yetkili.degilsiniz.php");
  die();
}
echo "<h1>Hosgeldin Menu 2</h1> <a href='login.php'>Log</a>";
?>
