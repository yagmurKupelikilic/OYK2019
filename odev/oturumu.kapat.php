<?php
@session_start();
session_destroy();
echo "Oturum kapatıldı";

?>
 <a href="index.php">Giriş ekranı</a>
