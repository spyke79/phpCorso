<?php
$con = new mysqli("localhost","root","");

if($con == false){
    die("Errore di connessione: ".$con->connect_error);
}

echo "Connessione Riuscita";
?>