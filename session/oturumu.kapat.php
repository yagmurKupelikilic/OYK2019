<?php
@session_start();
$_SESSION["giris_basarili"] = 0;
//session_destroy();
echo "Çıkış yaptınız... <br /> <a href='giris.kontrol.php'>Yeniden girmek için tıklayınız.</a>";
?>
