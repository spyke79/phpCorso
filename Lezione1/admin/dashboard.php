<?php

session_start(); //AVVIO LA SESSIONE

if(!$_SESSION['user_id']){
    header('Location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    //Chiamo la connesisone al DB
    include('../lib/connDBPDO.php');

    $sql = "SELECT nome, cognome, mail FROM utenti";
    $ris = $conn->query($sql); //Eseguo la query
?>
<div class="container">
    <div>
        <h2>Benvenuto <?php echo $_SESSION['nome'] ?></h2>
        <p><a href="logout.php">LogOut</a></p>
    </div>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Mail</th>
        </tr>
<?php
    while($row = $ris->fetch()){
        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['cognome']."</td>";
        echo "<td>".$row['mail']."</td>";
        echo "</tr>";
    }
    ?>
    </table>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>