<?php include"db.php" ?>
<?php include"functions/createfgv.php" ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hozzaadas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
body {
  background-image: url('library.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  font-family: 'Red Hat Mono', monospace;
}
</style>
</head>

<body>

    <button><a href="osszes.php">könyvek listázása</a></button>
    <button><a href="kereses.php">könyv keresése</a></button>
    <button><a href="update.php">könyv módosítása</a></button>
    <?php

  

creating();


    ?>
    <h2>Könyv hozzáadása</h2>
    <form action="hozzaadas.php" method="post">
        <label for="cim">Cím: </label><br>
        <input type="text" id="cim" name="cim"><br>
        <label for="szerző">Szerző(k): </label><br>
        <input type="text" id="szerzo" name="szerzo" >
        <label for="oldalszam">Oldalszám: </label><br>
        <input type="text" id="oldalszam" name="oldalszam">
        <button type="submit" value="submit" name="submit">hozzáad</button>
    </form>
</body>

</html>