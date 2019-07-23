<!DOCTYPE html>
<html>
<body>
<h1>Merhaba</h1>

<?php $A=5
?>
<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>
<?php if ($A == 5): ?>
<p>
A değişkenin değeri 5'tir.
</p>
<?php else: ?>
  İfade doğru değilse bu gösterilir.
<?php endif; ?>
<?php
$host = 'google.com';
echo `ping -n 3 {$host}`;

$i = 1;
while ($i <= 10) {
    echo $i++; echo "<br/>";
    $i++;
}



?>
</body>
</html>
