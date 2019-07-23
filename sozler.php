<h1>GÜNÜN SÖZÜ</h1>
<?php

$sozler = array("Bir elin nesi var",
                "Iki elin sesi var",
                "sora sora bagdat bulunur");
$soz = rand(0, 2);

for ($i=0; $i <10 ; $i++) {
  $sozNo = rand(0, count($sozler)-1);
  echo  $sozler [ $sozNo ] ;
  echo "<br />";
}
?>
