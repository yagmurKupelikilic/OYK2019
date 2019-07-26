<?php
@session_start();
if($_SESSION["giris_basarili"] == 1){
  header("location: index.php");
  die();
}

//giriş başarılıysa
if(isset($_POST["adi"])){
  if($_POST["adi"] == "ahmet" and $_POST["pass"] == "123"){
    header("location: index.php");
    $_SESSION["giris_basarili"] = 1;
    $_SESSION["kullanici_adi"] = "Ahmet Yılmaz";
    $_SESSION["yetki"]= 1;
    die();
  }
  if($_POST["adi"] == "mehmet" and $_POST["pass"] == "789"){
    header("location: index.php");
    $_SESSION["giris_basarili"] = 1;
    $_SESSION["kullanici_adi"] = "Mehmet Yıldız";
    $_SESSION["yetki"]= 2;
    die();
  }
echo "tekrar deneyiniz...";
}

 ?>


<form  method="post">
  Adi: <input type="text" name="adi" value="">
  <br />  <br />
  Password: <input type="text" name="pass" value="">
  <br />  <br />
  <input type="submit" value="Giriş Yap" />
</form>
