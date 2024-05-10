<?php
include('lib/connDBPDO.php');

echo "<br>nome = ".$_POST['nome'];
echo "<br>PWD in chiaro: ". $_POST['pwd'];
echo "<br>PWD Cod: " . md5($_POST['pwd']);

?>