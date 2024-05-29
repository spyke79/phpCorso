<?php

include('lib/connDBPDO.php');

$mail =  $_POST['username'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM utenti WHERE mail = '$mail'" ;
echo $sql;

$ris = $conn->query($sql); //Esugua la query

$st = $ris->rowCount(); //Conto quante righe mi ritorna se torna 0 significa che la mail non è presente nel DB

echo "Utenti trovati '$st'";

if($st > 0){
    //Ti ho trovato
    $utente = $ris->fetch();
    if($utente['pwd'] == md5($pwd)){
        echo "Benvenuto " . $utente['nome'];

        //Creo La Sessione
        session_start();
        $_SESSION['user_id'] = $utente['id'];
        $_SESSION['nome'] = $utente['nome'];

        header('Location: admin/dashboard.php');
    }else{
        echo "Password Errata";
        header('Location: login.php?esito="Password Errata"');
    }

}else{
    echo "Mail non presente";
}



?>