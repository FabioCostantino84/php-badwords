<!-- 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.
index.php
script.php

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form (occhio a quato detto stamattina sui form e gli attributi necessari).

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
 stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
 -->

<?php

/* VARIABLES */

$wordText = $_GET["frase"];
$censoredText = $_GET["censored"];
//$sostituita = '***';
//$wordTextCensored = str_replace(strtolower($censoredText), $sostituita, strtolower($wordText));

/* strlen($nomeVariabile); = Restituisce la lunghezza del dato 'string' */
$censoredTextLenght = strlen($censoredText);

/* substr_replace($nomeVariabile) — Sostituisce il testo all'interno di una porzione di una stringa */
/* str_repeat($nomeVariabile) — Ripete una stringa */
// $wordTextCensored = $wordText . str_replace(' ', str_repeat('*', $censoredTextLenght), $censoredTextLenght)//capire come applicare "strtolower
$wordTextCensored = str_replace($censoredText, '***', $wordText);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <div>
        <h1>PHP Badwords</h1>
        <h2>La tua frase: </h2>
        <!-- "echo" è una funzione per generare output testuale dinamico. -->
        <p><?php echo $wordText; ?> <?php echo strlen($wordText); ?></p>

        <h2>Parola da censurare: </h2>
        <p><?php echo $censoredText; ?> <?php echo strlen($censoredText); ?></p>

        <h2>Frase con la parola censurata: </h2>
        <p><?php echo $wordTextCensored; ?></p>
    </div>

</body>

</html>