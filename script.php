<?php

$frase = $_POST["frase"];
$censored = $_POST["censored"];



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
        <h2>La tua frase:</h2>
        <p><?php echo $frase; ?> <?php echo strlen($frase); ?></p>

        <h2>Parola da censurare:</h2>
        <p><?php echo $censored; ?> <?php echo strlen($censored); ?></p>
    </div>

</body>

</html>