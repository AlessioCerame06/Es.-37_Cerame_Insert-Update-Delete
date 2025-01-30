<?php
    include("connessione/connessione.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nome = $_GET["nome"];
            $annoNascita = $_GET["annoNascita"];
            $nazionalita = $_GET["nazionalita"];

            $sql = "INSERT INTO attori (Nome, AnnoNascita, Nazionalita) VALUES ('$nome', '$annoNascita', '$nazionalita')";
            if ($conn -> query($sql)) {
                echo "<div style='background-color: green'> 
                <p>Inserimento attore avvenuto con successo</p>
                <p>Nome: " . $nome . "</p> 
                <p>Anno di nascita: " . $annoNascita . "</p>
                <p>Nazionalità: " . $nazionalita . "</p>
                </div>";
            } else {
                echo "<div style='background-color: red'> 
                <p>Inserimento attore non avvenuto con successo</p>
                <p>Nome: " . $nome . "</p> 
                <p>Anno di nascita: " . $annoNascita . "</p>
                <p>Nazionalità: " . $nazionalita . "</p>
                </div>";
            }
        ?>
        <a href="aggiornamento.html">Ritorna alla pagina inserimento</a>
    </body>
</html>