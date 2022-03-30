<?php include "db.php" ?>
<?php include "functions/deletefgv.php" ?>
<?php include "functions/showallfgv.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/osszes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Összes könyv</title>
    <style>
        body {
            background-image: url('library.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Red Hat Mono', monospace;
            padding: 20px;
        }

        h2 {
            color: #00334d;
            font-size: 2rem;
            padding: 50px 400px;
        }

        button {
            background-color: #c2d6d6;
            font-size: 1.2rem;
            border-radius: 5px;
            


        }

        table,
        th,
        td {

            text-align: center;
            justify-content: center;
            position: center;
            margin: auto;
            padding: auto;
        }

        th,
        td {
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid;
            margin: auto;
            padding: auto;
        }

        a {
            color: #00334d;
            ;
        }


        input {
            margin: auto;
            height: 2rem;
            width: auto;
        }

        button:hover,
        button:active {
            background-color: #a3c2c2;
            box-shadow: 0px 2px 5px 0px black;
        }
    </style>
</head>

<body>
    <button><a href="hozzaadas.php">könyv hozzáadása</a></button>
    <button><a href="kereses.php">könyv keresése</a></button>
    <button><a href="update.php">könyv módosítása</a></button>
    <h2>Összes könyv </h2>
    <?php
  
showAll();

    ?>


    <?php



    if (isset($_POST['update'])) {
        header("Location: http://localhost/mesekonyv_kezelo/update.php");
    }

    ?>


</body>

</html>