<?php
include('lib/connDBPDO.php');

echo "<br>nome = ".$_POST['nome'];
echo "<br>PWD in chiaro: ". $_POST['pwd'];
echo "<br>PWD Cod: " . md5($_POST['pwd']);

$pwd_md5 = md5($_POST['pwd']);

$sql = 'INSERT INTO utenti 
        VALUES(null,"'.$_POST['nome'].'","'.$_POST['cognome'].'","'.$pwd_md5.'","'.$_POST['email'].'")';


//Vado ad esguire la query
$conn ->exec($sql);
echo "dati inseriti";

?>