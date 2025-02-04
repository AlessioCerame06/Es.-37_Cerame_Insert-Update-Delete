<?php
    include("connessione/connessione.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AGGIORNA</title>
    </head>
    <body>
        <?php
            $idRecensione = $_GET["idRecensione"];
            $voto = $_GET["voto"];
            $sql = "UPDATE recensioni SET Voto = $voto WHERE IDRecensione = $idRecensione";
            if ($conn -> query($sql)) {
                echo "<div style='background-color: green'> 
                <p>Aggiornamento recensione avvenuta con successo</p>
                <p>ID recensione: " . $idRecensione . "</p> 
                <p>Nuovo voto: " . $voto . "</p>
                </div>";
            } else {
                echo "<div style='background-color: red'> 
                <p>Aggiornamento recensione non avvenuta con successo</p>
                <p>ID recensione: " . $idRecensione . "</p> 
                <p>Nuovo voto: " . $voto . "</p>
                </div>";
            }
        ?>
        <a href="aggiornamento.html">Ritorna alla pagina form</a>
    </body>
</html>