<?php
// commento non visibile in html

/* var_dump(explode(' ', $frase ));
var_dump(explode(' ', $censured )); */

/* var_dump($frase);
var_dump($censured); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <form action="script.php" method="post">
        <input type="text" name="frase" id="frase" placeholder="Scrivi una frase">
        <input type="text" name="censored" id="censored" placeholder="Scrivi la parola da censurare">
        <button type="submit">Save</button>
    </form>

    <!-- <h2>La tua frase: <?php echo $_GET['frase'] ?></h2> -->
    <!-- <h2>Parola censurata: <?php echo $_GET['censored'] ?></h2> -->

</body>

</html>