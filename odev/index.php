<?php
@session_start();
if($_SESSION["giris_basarili"] == 1){
//login olundu
  if($_SESSION["yetki"] == 1){
    header("location: menu1.php");
    die();
  }

  if($_SESSION["yetki"] == 2){
    header("location: menu2.php");
    die();
  }

}else{
  //login olunmamış
  header("location: login.php");
}
?>
