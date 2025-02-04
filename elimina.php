<?php
    include("connessione/connessione.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ELIMINA</title>
    </head>
    <body>
        <?php
            $idProiezione = $_GET["idProiezione"];
            $sql = "DELETE FROM proiezioni WHERE CodProiezione = $idProiezione";
            if ($conn -> query($sql)) {
                echo "<p style='background-color: green'>Proiezione con ID $idProiezione eliminata con successo</p>";
            } else {
                echo "<p style='background-color: red'>Proiezione con ID $idProiezione non eliminata</p>";
            }
        ?>
        <a href="aggiornamento.html">Ritorna alla pagina form</a>
    </body>
</html>