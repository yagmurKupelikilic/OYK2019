<?php
@session_start();
?>
<h1>Eğitmen Girişi</h1>
<form method="post">
  Kulllanıcı adınız: <input type="text", name="user" value= ""/>
  <br /><br/>
  Parolanız: <input type="password" name="pass" value="">
  <br /><br/>
  <input type="submit", value="Giriş yap" />
</form>

<?php
if(isset( $_POST["user"])){
  if( $_POST["user"] == "linux" and $_POST["pass"] == "sudo"){
  $_SESSION[giris_basarili] = 1;
  echo "<a href='sorular.php'>Sorular sayfasından devam edebilirsiniz.</a>";
  //echo "Giriş başarılı.";
  //include("sorular.php");
}else{
  echo "Giriş hatalı.";
  $_SESSION[giris_basarili] = 0;

  }
}

?>
