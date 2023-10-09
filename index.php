<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<form>
    <input type="text" name="frase" id="frase" placeholder="scrivi una frase">
    <input type="text" name="censured" id="censured" placeholder="parola da censurare">
    <button type="submit">Save</button>
</form>

<h2>La tua frase: <?php echo $_GET['frase']?></h2>
<h2>Parola censurata: <?php echo $_GET['censured']?></h2>
    
</body>
</html>