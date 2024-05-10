<?php

$host = "localhost";
$user = "root";
$pwd = "";
$dbName = "ecommercecorso";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user,$pwd);
    //Vado a vedere eventuali errori
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connessione Riuscita";
}catch(PDOException $e){
    echo "Errore connessione: ". $e->getMessage();
}

?>