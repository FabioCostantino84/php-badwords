<?php

$wordText = $_POST["frase"];
$censoredText = $_POST["censored"];
//$sostituita = '***';
$censoredTextLenght = strlen($censoredText);
//$wordTextCensored = str_replace(strtolower($censoredText), $sostituita, strtolower($wordText));
$wordTextCensored = $wordText . substr_replace(' ', str_repeat('*', $censoredTextLenght), $censoredTextLenght)

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
        <p><?php echo $wordText; ?> <?php echo strlen($wordText); ?></p>

        <h2>Parola da censurare: </h2>
        <p><?php echo $censoredText; ?> <?php echo strlen($censoredText); ?></p>

        <h2>Frase con la parola censurata: </h2>
        <p><?php echo $wordTextCensored; ?></p>
    </div>

</body>

</html>