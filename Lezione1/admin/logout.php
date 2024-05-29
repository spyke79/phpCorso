<?php

session_start(); //Prima richiamo l asessione

session_destroy(); //Distruggo la sesisone cancello le variabili di sesisone
header('Location: ../login.php');

?>